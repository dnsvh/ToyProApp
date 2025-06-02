<?php
// src/Controller/CalendarEntryController.php

namespace App\Controller;

use App\Entity\CalendarEntry;
use App\Form\CalendarEntryForm;
use App\Repository\CalendarEntryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/calendar/entry')]
final class CalendarEntryController extends AbstractController
{
    // 1) INDEX: GET  /calendar/entry
    #[Route('/', name: 'app_calendar_entry_index', methods: ['GET'])]
    public function index(CalendarEntryRepository $calendarEntryRepository): Response
    {
        $entries = $calendarEntryRepository->findAll();

        return $this->render('calendar_entry/index.html.twig', [
            'calendar_entries' => $entries,
        ]);
    }

    // 2) NEW (display form & handle submission): GET+POST  /calendar/entry/new
    #[Route('/new', name: 'app_calendar_entry_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $calendarEntry = new CalendarEntry();
        $form = $this->createForm(CalendarEntryForm::class, $calendarEntry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($calendarEntry);
            $entityManager->flush();

            return $this->redirectToRoute('app_calendar_entry_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calendar_entry/new.html.twig', [
            'calendar_entry' => $calendarEntry,
            'form'           => $form->createView(),
        ]);
    }

    // 3) SHOW (view a single entry): GET  /calendar/entry/{id}
    #[Route('/{id}', name: 'app_calendar_entry_show', methods: ['GET'])]
    public function show(CalendarEntry $calendarEntry): Response
    {
        return $this->render('calendar_entry/show.html.twig', [
            'calendar_entry' => $calendarEntry,
        ]);
    }

    // 4) EDIT (display form & handle submission): GET+POST  /calendar/entry/{id}/edit
    #[Route('/{id}/edit', name: 'app_calendar_entry_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CalendarEntry $calendarEntry, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CalendarEntryForm::class, $calendarEntry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_calendar_entry_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('calendar_entry/edit.html.twig', [
            'calendar_entry' => $calendarEntry,
            'form'           => $form->createView(),
        ]);
    }

    // 5) DELETE (handle the “delete” POST): POST  /calendar/entry/{id}
    #[Route('/{id}', name: 'app_calendar_entry_delete', methods: ['POST'])]
    public function delete(Request $request, CalendarEntry $calendarEntry, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calendarEntry->getId(), $request->request->get('_token'))) {
            $entityManager->remove($calendarEntry);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_calendar_entry_index', [], Response::HTTP_SEE_OTHER);
    }
}