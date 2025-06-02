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

/**
 * CalendarController
 *
 * 1) monthView(): shows a month‐grid for either:
 *    - the logged‐in user (if ROLE_USER), or
 *    - any user (if ROLE_ADMIN or ROLE_MANAGER)—with a dropdown to pick which user.
 *
 * 2) dayView(): unified “show existing” and “create new” logic, depending on query‐parameters:
 *      • If ?id=… → load that entry for show/edit.
 *      • If ?date=YYYY-MM-DD&userId=… → attempt to create a new entry for that date/user, then redirect to show/edit.
 *
 * 3) clockIn() / clockOut(): endpoints for the dashboard button.
 *
 * Permissions:
 *  - Admins can view/edit any user’s calendar.
 *  - Managers can view/edit a user only if they share at least one UserTag (team) in common.
 *  - Regular users can view/edit only their own.
 */
#[Route('/calendar')]
class CalendarController extends AbstractController
{
    private CalendarEntryRepository $entryRepo;
    private EntityManagerInterface $em;
    private UserRepository $userRepo;
    private CalendarTagRepository $tagRepo;

    public function __construct(
        CalendarEntryRepository $entryRepo,
        UserRepository $userRepo,
        CalendarTagRepository $tagRepo,
        EntityManagerInterface $em
    ) {
        $this->entryRepo = $entryRepo;
        $this->userRepo  = $userRepo;
        $this->tagRepo   = $tagRepo;
        $this->em        = $em;
    }

    /**
     * Month‐view:
     *
     * @Route(
     *   "/month/{year<\d{4}>}/{month<\d{1,2}>}",
     *   name="calendar_month_view",
     *   methods={"GET"}
     * )
     * @Route("/month", name="calendar_month_default", methods={"GET"})
     *
     * If no {year}/{month}, defaults to current.
     *
     * Non‐admin/manager → only their own user.
     * Admin/Manager → can optionally pass ?userId= to view another user.
     */
    public function monthView(Request $request, ?int $year = null, ?int $month = null): Response
    {
        // 1) Must be logged in
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('You must be logged in to view the calendar.');
        }

        // 2) Determine targetYear/targetMonth (defaults to today)
        $today       = new \DateTimeImmutable();
        $targetYear  = $year  ?? (int)$today->format('Y');
        $targetMonth = $month ?? (int)$today->format('n');

        // 3) Decide whose calendar to show:
        $queryUserId = $request->query->get('userId');
        if ($this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_MANAGER')) {
            if ($queryUserId) {
                $targetUser = $this->userRepo->find($queryUserId);
                if (!$targetUser) {
                    throw $this->createNotFoundException('User not found.');
                }
            } else {
                $targetUser = $currentUser;
            }
        } else {
            // Regular user can only see their own
            $targetUser = $currentUser;
        }

        // 4) If ROLE_MANAGER (but not ADMIN), confirm they share at least one tag with $targetUser
        if ($this->isGranted('ROLE_MANAGER') && !$this->isGranted('ROLE_ADMIN')) {
            $sharedTags = array_intersect(
                $currentUser->getTags()->toArray(),
                $targetUser->getTags()->toArray()
            );
            if (count($sharedTags) === 0 && $currentUser !== $targetUser) {
                throw $this->createAccessDeniedException('Managers can only view calendars of their own team.');
            }
        }

        // 5) Compute first/last day of that month
        $firstOfMonth = new \DateTimeImmutable(sprintf('%04d-%02d-01', $targetYear, $targetMonth));
        $lastOfMonth  = $firstOfMonth->modify('last day of this month');

        // 6) Fetch all entries for $targetUser between firstOfMonth and lastOfMonth
        $entries = $this->entryRepo->createQueryBuilder('e')
            ->where('e.user = :user')
            ->andWhere('e.date BETWEEN :start AND :end')
            ->setParameter('user', $targetUser)
            ->setParameter('start', $firstOfMonth->format('Y-m-d'))
            ->setParameter('end',   $lastOfMonth->format('Y-m-d'))
            ->orderBy('e.date', 'ASC')
            ->getQuery()
            ->getResult();

        // 7) Build a simple map dateStr -> CalendarEntry
        $entryMap = [];
        foreach ($entries as $ent) {
            /** @var CalendarEntry $ent */
            $entryMap[$ent->getDate()->format('Y-m-d')] = $ent;
        }

        // 8) If ADMIN or MANAGER, fetch all users for “View user” dropdown
        $allUsers = [];
        if ($this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_MANAGER')) {
            $allUsers = $this->userRepo->findAll();
        }

        return $this->render('calendar/index.html.twig', [
            'targetUser'   => $targetUser,
            'allUsers'     => $allUsers,        // for the filter dropdown
            'currentUser'  => $currentUser,
            'year'         => $targetYear,
            'month'        => $targetMonth,
            'entryMap'     => $entryMap,        // keyed by 'YYYY-MM-DD'
            'firstOfMonth' => $firstOfMonth,
            'lastOfMonth'  => $lastOfMonth,
        ]);
    }

    /**
     * Day‐detail view (show or create new):
     *
     * - If ?id=… is present, load and display that CalendarEntry.
     * - Else if ?date=YYYY-MM-DD&userId=… is present, attempt to create a new entry for that date/user,
     *   then redirect back to ?id=… so you end up in “edit” mode.
     *
     * @Route("/day", name="calendar_day_view", methods={"GET","POST"})
     */
    public function dayView(Request $request): Response
    {
        // 1) Must be logged in
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('You must be logged in to view or create a day entry.');
        }

        // 2) If “id” query param exists → show/edit that entry
        $id = $request->query->getInt('id', 0);
        if ($id > 0) {
            $entry = $this->entryRepo->find($id);
            if (!$entry) {
                throw $this->createNotFoundException('Calendar entry not found.');
            }
        }
        else {
            // 3) We expect date=YYYY-MM-DD & userId=…
            $dateStr     = $request->query->get('date');
            $queryUserId = $request->query->getInt('userId', 0);

            if (!$dateStr || !$queryUserId) {
                throw $this->createNotFoundException('Either "id" or both "date" and "userId" are required.');
            }

            // 4) Build DateTimeImmutable from dateStr
            $targetDate = \DateTimeImmutable::createFromFormat('Y-m-d', $dateStr);
            if (!$targetDate) {
                throw $this->createNotFoundException('Invalid date format.');
            }

            // 5) Load targetUser
            $targetUser = $this->userRepo->find($queryUserId);
            if (!$targetUser) {
                throw $this->createNotFoundException('User not found.');
            }

            // 6) Permission checks for creating a new entry:
            if ($currentUser !== $targetUser) {
                if ($this->isGranted('ROLE_ADMIN')) {
                    // Admins can add for anyone
                }
                elseif ($this->isGranted('ROLE_MANAGER')) {
                    $sharedTags = array_intersect(
                        $currentUser->getTags()->toArray(),
                        $targetUser->getTags()->toArray()
                    );
                    if (count($sharedTags) === 0) {
                        throw $this->createAccessDeniedException(
                            'Managers can only add entries for your own team members.'
                        );
                    }
                }
                else {
                    throw $this->createAccessDeniedException('You cannot create an entry for another user.');
                }
            }

            // 7) Check if an entry already exists for $targetUser on $targetDate
            $existing = $this->entryRepo->findOneBy([
                'user' => $targetUser,
                'date' => $targetDate,
            ]);

            if ($existing) {
                // Redirect to the same route, but passing id=existing → go into show/edit mode
                return $this->redirectToRoute('calendar_day_view', ['id' => $existing->getId()]);
            }

            // 8) Otherwise, create a brand new entry
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

        // At this point, $entry is either newly created or fetched by ID.
        // 9) Enforce the “view” permission again:
        $owner = $entry->getUser();
        $canView = false;

        if ($this->isGranted('ROLE_ADMIN')) {
            $canView = true;
        }
        elseif ($this->isGranted('ROLE_MANAGER')) {
            $sharedTags = array_intersect(
                $currentUser->getTags()->toArray(),
                $owner->getTags()->toArray()
            );
            if (count($sharedTags) > 0 || ($currentUser === $owner)) {
                $canView = true;
            }
        }
        elseif ($currentUser === $owner) {
            $canView = true;
        }

        if (!$canView) {
            throw $this->createAccessDeniedException(
                'You do not have permission to view this day’s entry.'
            );
        }

        // 10) Determine if they “can edit all fields” vs “only comment”:
        $canEditAll = false;
        if ($this->isGranted('ROLE_ADMIN')) {
            $canEditAll = true;
        }
        elseif ($this->isGranted('ROLE_MANAGER') && $currentUser !== $owner) {
            // Manager editing someone else’s entry only if they share a tag
            $sharedTags = array_intersect(
                $currentUser->getTags()->toArray(),
                $owner->getTags()->toArray()
            );
            if (count($sharedTags) > 0) {
                $canEditAll = true;
            }
        }
        elseif ($currentUser === $owner) {
            // Ordinary user on their own entry may only comment, not edit hours/tags
            $canEditAll = false;
        }

        // 11) Build the form. If not allowed to edit all, remove those fields
        $form = $this->createForm(CalendarEntryForm::class, $entry);
        if (!$canEditAll) {
            $form
                ->remove('date')
                ->remove('clockIn')
                ->remove('clockOut')
                ->remove('hoursWorked')
                ->remove('tags')
                ->remove('user')
            ;
        }

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($canEditAll) {
                // If they edited clockIn/clockOut, recalculate hours:
                $entry->recomputeHours();
            }
            $this->em->persist($entry);
            $this->em->flush();

            $this->addFlash('success', 'Entry updated.');
            return $this->redirectToRoute(
                'calendar_day_view',
                ['id' => $entry->getId()]
            );
        }

        // 12) Fetch all CalendarTags for the dropdown (if they can edit tags)
        $allTags = $this->tagRepo->findAll();

        return $this->render('calendar/day.html.twig', [
            'entry'      => $entry,
            'form'       => $form->createView(),
            'canEditAll' => $canEditAll,
            'allTags'    => $allTags,
        ]);
    }

    /**
     * Clock‐in endpoint. Creates a new CalendarEntry for “today”
     * with clockIn = now. Only if the user is NOT already clocked in today.
     *
     * @Route("/clock-in", name="calendar_clock_in", methods={"POST"})
     */
    public function clockIn(): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('You must be logged in to clock in.');
        }
        if (!$this->isGranted('ROLE_USER')) {
            throw new AccessDeniedException('Only users can clock in.');
        }

        $today = (new \DateTimeImmutable())->setTime(0, 0, 0);
        $existing = $this->entryRepo->createQueryBuilder('e')
            ->where('e.user = :u')
            ->andWhere('e.date = :d')
            ->andWhere('e.clockIn IS NOT NULL')
            ->andWhere('e.clockOut IS NULL')
            ->setParameter('u', $currentUser)
            ->setParameter('d', $today->format('Y-m-d'))
            ->getQuery()
            ->getOneOrNullResult();

        if ($existing) {
            $this->addFlash('warning', 'You are already clocked in for today.');
            return $this->redirectToRoute('dashboard');
        }

        $entry = new CalendarEntry();
        $entry->setUser($currentUser)
            ->setDate($today)
            ->setClockIn(new \DateTimeImmutable())
            ->setClockOut(null)
            ->setHoursWorked(null)
            ->setComment(null);

        $this->em->persist($entry);
        $this->em->flush();

        $this->addFlash(
            'success',
            'Clock–in recorded at ' . (new \DateTimeImmutable())->format('H:i')
        );
        return $this->redirectToRoute('dashboard');
    }

    /**
     * Clock‐out endpoint. Finds today’s entry where clockOut == null,
     * and sets clockOut = now, then recomputes hours.
     *
     * @Route("/clock-out", name="calendar_clock_out", methods={"POST"})
     */
    public function clockOut(): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('You must be logged in to clock out.');
        }
        if (!$this->isGranted('ROLE_USER')) {
            throw new AccessDeniedException('Only users can clock out.');
        }

        $today = (new \DateTimeImmutable())->setTime(0, 0, 0);
        $entry = $this->entryRepo->createQueryBuilder('e')
            ->where('e.user = :u')
            ->andWhere('e.date = :d')
            ->andWhere('e.clockIn IS NOT NULL')
            ->andWhere('e.clockOut IS NULL')
            ->setParameter('u', $currentUser)
            ->setParameter('d', $today->format('Y-m-d'))
            ->getQuery()
            ->getOneOrNullResult();

        if (!$entry) {
            $this->addFlash('warning', 'No running clock-in found for today.');
            return $this->redirectToRoute('dashboard');
        }

        $entry->setClockOut(new \DateTimeImmutable());
        $entry->recomputeHours();
        $this->em->flush();

        $this->addFlash(
            'success',
            'Clock–out recorded at ' . (new \DateTimeImmutable())->format('H:i') .
            ', total hours: ' . $entry->getHoursWorked()
        );
        return $this->redirectToRoute('dashboard');
    }
}