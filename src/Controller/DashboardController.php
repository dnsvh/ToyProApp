<?php
// src/Controller/DashboardController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CalendarEntryRepository;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard", methods={"GET"})
     */
    public function index(CalendarEntryRepository $entryRepo): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Login required');
        }

        $today = (new \DateTimeImmutable())->setTime(0,0,0);
        $activeEntry = $entryRepo->createQueryBuilder('e')
            ->where('e.user = :u')
            ->andWhere('e.date = :d')
            ->andWhere('e.clockIn IS NOT NULL')
            ->andWhere('e.clockOut IS NULL')
            ->setParameter('u', $user)
            ->setParameter('d', $today->format('Y-m-d'))
            ->getQuery()
            ->getOneOrNullResult();

        return $this->render('dashboard/index.html.twig', [
            'activeEntry' => $activeEntry,
        ]);
    }
}