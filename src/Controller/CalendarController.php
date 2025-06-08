<?php
// src/Controller/CalendarController.php

namespace App\Controller;

use App\Entity\CalendarEntry;
use App\Entity\User;
use App\Form\CalendarEntryForm;
use App\Repository\CalendarEntryRepository;
use App\Repository\CalendarTagRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/calendar')]
class CalendarController extends AbstractController
{
    public function __construct(
        private CalendarEntryRepository $entryRepo,
        private UserRepository $userRepo,
        private CalendarTagRepository $tagRepo,
        private EntityManagerInterface $em
    ) {}

    /**
     * Month‐view (with optional ?userId= for admins/managers)
     */
    #[Route(
        '/month/{year<\d{4}>}/{month<\d{1,2}>}',
        name: 'calendar_month_view',
        methods: ['GET']
    )]
    #[Route('/month', name: 'calendar_month_default', methods: ['GET'])]
    public function monthView(Request $request, ?int $year = null, ?int $month = null): Response
    {
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('You must be logged in to view the calendar.');
        }

        $today       = new \DateTimeImmutable();
        $targetYear  = $year  ?? (int)$today->format('Y');
        $targetMonth = $month ?? (int)$today->format('n');

        $queryUserId = $request->query->getInt('userId');
        if ($this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_MANAGER')) {
            $targetUser = $queryUserId
                ? $this->userRepo->find($queryUserId) ?? throw $this->createNotFoundException('User not found.')
                : $currentUser;
        } else {
            $targetUser = $currentUser;
        }

        if ($this->isGranted('ROLE_MANAGER') && !$this->isGranted('ROLE_ADMIN')) {
            $shared = array_intersect(
                $currentUser->getTags()->toArray(),
                $targetUser->getTags()->toArray()
            );
            if (count($shared) === 0 && $targetUser !== $currentUser) {
                throw $this->createAccessDeniedException('Managers can only view calendars of their own team.');
            }
        }

        $firstOfMonth = new \DateTimeImmutable(sprintf('%04d-%02d-01', $targetYear, $targetMonth));
        $lastOfMonth  = $firstOfMonth->modify('last day of this month');

        // <-- updated here: use individual setParameter() calls
        $qb = $this->entryRepo->createQueryBuilder('e')
            ->where('e.user = :user')
            ->andWhere('e.date BETWEEN :start AND :end')
            ->orderBy('e.date','ASC')
            ->setParameter('user', $targetUser)
            ->setParameter('start', $firstOfMonth->format('Y-m-d'))
            ->setParameter('end',   $lastOfMonth->format('Y-m-d'));

        $entries = $qb->getQuery()->getResult();

        $entryMap = [];
        foreach ($entries as $ent) {
            $entryMap[$ent->getDate()->format('Y-m-d')] = $ent;
        }

        $allUsers = ($this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_MANAGER'))
            ? $this->userRepo->findAll()
            : [];

        return $this->render('calendar/index.html.twig', [
            'targetUser'   => $targetUser,
            'allUsers'     => $allUsers,
            'currentUser'  => $currentUser,
            'year'         => $targetYear,
            'month'        => $targetMonth,
            'entryMap'     => $entryMap,
            'firstOfMonth' => $firstOfMonth,
            'lastOfMonth'  => $lastOfMonth,
        ]);
    }

    /**
     * Day‐detail view (show or create/edit a single entry).
     */
    #[Route('/day', name: 'calendar_day_view', methods: ['GET','POST'])]
    public function dayView(Request $request): Response
    {
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('You must be logged in to view or create a day entry.');
        }

        $id = $request->query->getInt('id', 0);
        if ($id > 0) {
            $entry = $this->entryRepo->find($id) ?? throw $this->createNotFoundException('Calendar entry not found.');
        } else {
            $dateStr     = $request->query->get('date');
            $queryUserId = $request->query->getInt('userId', 0);

            if (!$dateStr || !$queryUserId) {
                throw $this->createNotFoundException('Either "id" or both "date" and "userId" are required.');
            }

            $targetDate = \DateTimeImmutable::createFromFormat('Y-m-d', $dateStr)
                ?: throw $this->createNotFoundException('Invalid date format.');
            $targetUser = $this->userRepo->find($queryUserId)
                ?: throw $this->createNotFoundException('User not found.');

            if ($currentUser !== $targetUser && !$this->isGranted('ROLE_ADMIN')) {
                if ($this->isGranted('ROLE_MANAGER')) {
                    $shared = array_intersect(
                        $currentUser->getTags()->toArray(),
                        $targetUser->getTags()->toArray()
                    );
                    if (count($shared) === 0) {
                        throw $this->createAccessDeniedException('Managers can only add entries for your own team members.');
                    }
                } else {
                    throw $this->createAccessDeniedException('You cannot create an entry for another user.');
                }
            }

            if ($existing = $this->entryRepo->findOneBy(['user'=>$targetUser,'date'=>$targetDate])) {
                return $this->redirectToRoute('calendar_day_view', ['id'=>$existing->getId()]);
            }

            $entry = new CalendarEntry();
            $entry->setUser($targetUser)
                ->setDate($targetDate)
                ->setClockIn(null)
                ->setClockOut(null)
                ->setHoursWorked(null)
                ->setComment(null);

            $this->em->persist($entry);
            $this->em->flush();
        }

        $owner    = $entry->getUser();
        $canView  = $this->isGranted('ROLE_ADMIN')
            || ($this->isGranted('ROLE_MANAGER') && ($currentUser === $owner || array_intersect(
                        $currentUser->getTags()->toArray(),
                        $owner->getTags()->toArray()
                    )))
            || ($currentUser === $owner);

        if (!$canView) {
            throw $this->createAccessDeniedException('You do not have permission to view this entry.');
        }

        $canEditAll = $this->isGranted('ROLE_ADMIN')
            || ($this->isGranted('ROLE_MANAGER') && $currentUser !== $owner && array_intersect(
                    $currentUser->getTags()->toArray(),
                    $owner->getTags()->toArray()
                ));

        $form = $this->createForm(CalendarEntryForm::class, $entry);
        if (!$canEditAll) {
            $form
                ->remove('date')
                ->remove('clockIn')
                ->remove('clockOut')
                ->remove('hoursWorked')
                ->remove('tags')
                ->remove('user');
        }

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($canEditAll) {
                $entry->recomputeHours();
            }
            $this->em->flush();
            $this->addFlash('success', 'Entry updated.');
            return $this->redirectToRoute('calendar_day_view', ['id' => $entry->getId()]);
        }

        $allTags = $this->tagRepo->findAll();
        return $this->render('calendar/day.html.twig', [
            'entry'      => $entry,
            'form'       => $form->createView(),
            'canEditAll' => (bool)$canEditAll,
            'allTags'    => $allTags,
        ]);
    }

    /**
     * POST /calendar/clock-in
     */
    #[Route('/clock-in', name: 'calendar_clock_in', methods: ['POST'])]
    public function clockIn(): Response
    {
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User || !$this->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException('Only users can clock in.');
        }

        $today = (new \DateTimeImmutable())->setTime(0,0,0);
        $existing = $this->entryRepo->findOneBy([
            'user'     => $currentUser,
            'date'     => $today,
            'clockOut' => null,
        ]);

        if ($existing) {
            $this->addFlash('warning', 'You are already clocked in for today.');
            return $this->redirectToRoute('dashboard');
        }

        $entry = new CalendarEntry();
        $entry->setUser($currentUser)
            ->setDate($today)
            ->setClockIn(new \DateTimeImmutable());

        $this->em->persist($entry);
        $this->em->flush();

        $this->addFlash('success', 'Clock–in recorded at ' . $entry->getClockIn()->format('H:i'));
        return $this->redirectToRoute('dashboard');
    }

    /**
     * POST /calendar/clock-out
     */
    #[Route('/clock-out', name: 'calendar_clock_out', methods: ['POST'])]
    public function clockOut(): Response
    {
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User || !$this->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException('Only users can clock out.');
        }

        $today = (new \DateTimeImmutable())->setTime(0,0,0);
        $entry = $this->entryRepo->findOneBy([
            'user'     => $currentUser,
            'date'     => $today,
            'clockOut' => null,
        ]);

        if (!$entry) {
            $this->addFlash('warning', 'No running clock-in found for today.');
            return $this->redirectToRoute('dashboard');
        }

        $entry->setClockOut(new \DateTimeImmutable());
        $entry->recomputeHours();
        $this->em->flush();

        $this->addFlash(
            'success',
            'Clock–out recorded at ' . $entry->getClockOut()->format('H:i') .
            ', total hours: ' . number_format($entry->getHoursWorked(), 2)
        );
        return $this->redirectToRoute('dashboard');
    }
}
