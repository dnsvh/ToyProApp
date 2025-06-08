<?php
// src/Controller/DashboardController.php

namespace App\Controller;

use App\Repository\CalendarEntryRepository;
use App\Repository\AnnouncementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTimeImmutable;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard", methods={"GET"})
     */
    public function index(
        CalendarEntryRepository $entryRepo,
        AnnouncementRepository $annRepo,
    ): Response {
        $user = $this->getUser();
        if (! $user) {
            throw $this->createAccessDeniedException('Inloggen vereist');
        }

        // 1) Active klok-in voor vandaag?
        $today = (new DateTimeImmutable())->setTime(0,0,0);
        $activeEntry = $entryRepo->createQueryBuilder('e')
            ->where('e.user = :u')
            ->andWhere('e.date = :d')
            ->andWhere('e.clockIn IS NOT NULL')
            ->andWhere('e.clockOut IS NULL')
            ->setParameter('u', $user)
            ->setParameter('d', $today->format('Y-m-d'))
            ->getQuery()
            ->getOneOrNullResult();

        // 2) Laatste aankondiging + volgende vijf
        $latest = $annRepo->findOneBy(['visible' => true], ['createdAt' => 'DESC']);
        $nextFive = $latest
            ? $annRepo->createQueryBuilder('a')
                ->where('a.visible = true')
                ->andWhere('a != :latest')
                ->setParameter('latest', $latest)
                ->orderBy('a.createdAt','DESC')
                ->setMaxResults(5)
                ->getQuery()
                ->getResult()
            : [];

        // 3) Laatste comment (indien any)
        $latestComment = null;
        if ($latest) {
            // assuming getComments() returns Collection ordered oldest→newest
            $visibleComments = $latest->getComments()->filter(fn($c)=>$c->isVisible());
            if (count($visibleComments)) {
                $latestComment = $visibleComments->last();
            }
        }

        // 4) Deze week: maandag t/m zondag
        // get ISO week start Monday
        $monday = (new DateTimeImmutable('monday this week'))->setTime(0,0,0);
        $weekDays = [];
        for ($i=0; $i<7; $i++) {
            $day = $monday->modify("+{$i} days");
            $entry = $entryRepo->findOneBy([
                'user' => $user,
                'date' => $day,
            ]);
            $minutes = 0;
            if ($entry && $entry->getHoursWorked() !== null) {
                $minutes = (int)round($entry->getHoursWorked() * 60);
            }
            $weekDays[] = ['date'=>$day, 'minutesWorked'=>$minutes];
        }

        return $this->render('dashboard/index.html.twig', [
            'activeEntry'   => $activeEntry,
            'latest'        => $latest,
            'nextFive'      => $nextFive,
            'latestComment' => $latestComment,
            'weekStart'     => $monday,
            'weekEnd'       => $monday->modify('+6 days'),
            'weekDays'      => $weekDays,
        ]);
    }
}
