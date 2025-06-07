<?php
// src/Controller/AnnouncementController.php

namespace App\Controller;

use App\Entity\Announcement;
use App\Entity\Comment;
use App\Form\AnnouncementForm;
use App\Form\CommentType;
use App\Repository\AnnouncementRepository;
use App\Service\GoogleSlidesService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/announcement')]
class AnnouncementController extends AbstractController
{
    private GoogleSlidesService $slidesService;

    public function __construct(GoogleSlidesService $slidesService)
    {
        $this->slidesService = $slidesService;
    }

    #[Route('/', name: 'app_announcement_index', methods: ['GET'])]
    public function index(AnnouncementRepository $announcementRepository): Response
    {
        $user = $this->getUser();
        $announcements = $announcementRepository->findForUser($user);

        return $this->render('announcement/index.html.twig', [
            'announcements' => $announcements,
        ]);
    }

    #[Route('/new', name: 'app_announcement_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        if (! $this->isGranted('ROLE_ADMIN') && ! $this->isGranted('ROLE_MANAGER')) {
            throw $this->createAccessDeniedException('Only admins or managers can create announcements.');
        }

        $announcement = new Announcement();
        $announcement->setSender($this->getUser());

        $form = $this->createForm(AnnouncementForm::class, $announcement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle image upload
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('announcement_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // (you might log this exception)
                }

                $announcement->setImagePath($newFilename);
            }

            $entityManager->persist($announcement);
            $entityManager->flush();

            // If "send to infoboard" was checked, push to Google Slides
            if ($announcement->isInfoboard()) {
                // createSlideFromAnnouncement() is a method in GoogleSlidesService
                $this->slidesService->createSlideFromAnnouncement($announcement);
            }

            return $this->redirectToRoute('app_announcement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('announcement/new.html.twig', [
            'announcement' => $announcement,
            'form'         => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_announcement_show', methods: ['GET', 'POST'])]
    public function show(
        Announcement $announcement,
        Request $request,
        EntityManagerInterface $entityManager,
        AnnouncementRepository $announcementRepository
    ): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $currentUser = $this->getUser();

        $visibleAnnouncements = $announcementRepository->findForUser($currentUser);
        if (!in_array($announcement, $visibleAnnouncements, true) && !$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('You do not have access to this announcement.');
        }

        $commentFormView = null;
        if ($announcement->isCommentsEnabled()) {
            $comment = new Comment();
            $comment->setAnnouncement($announcement);

            $commentForm = $this->createForm(CommentType::class, $comment);
            $commentForm->handleRequest($request);

            if ($commentForm->isSubmitted() && $commentForm->isValid()) {
                $comment->setSender($currentUser);
                $comment->setCreatedAt(new \DateTimeImmutable());
                $comment->setVisible(true);

                $entityManager->persist($comment);
                $entityManager->flush();

                return $this->redirectToRoute('app_announcement_show', [
                    'id' => $announcement->getId(),
                ]);
            }

            $commentFormView = $commentForm->createView();
        }

        $visibleComments = [];
        foreach ($announcement->getComments() as $c) {
            if ($c->isVisible()) {
                $visibleComments[] = $c;
            }
        }

        return $this->render('announcement/show.html.twig', [
            'announcement'   => $announcement,
            'comments'       => $visibleComments,
            'commentForm'    => $commentFormView,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_announcement_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Announcement $announcement,
        EntityManagerInterface $entityManager
    ): Response {
        if (! $this->isGranted('ROLE_ADMIN') && ! $this->isGranted('ROLE_MANAGER')) {
            throw $this->createAccessDeniedException('Only admins or managers can edit announcements.');
        }

        $form = $this->createForm(AnnouncementForm::class, $announcement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle new image upload if provided
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('announcement_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // (you might log this exception)
                }
                $announcement->setImagePath($newFilename);
            }

            $entityManager->flush();

            // If "send to infoboard" is checked, push update to Google Slides as well
            if ($announcement->isInfoboard()) {
                $this->slidesService->updateSlideForAnnouncement($announcement);
            }

            return $this->redirectToRoute('app_announcement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('announcement/edit.html.twig', [
            'announcement' => $announcement,
            'form'         => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_announcement_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Announcement $announcement,
        EntityManagerInterface $entityManager
    ): Response {
        if (! $this->isGranted('ROLE_ADMIN') && ! $this->isGranted('ROLE_MANAGER')) {
            throw $this->createAccessDeniedException('Only admins or managers can delete announcements.');
        }

        if ($this->isCsrfTokenValid('delete'.$announcement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($announcement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_announcement_index', [], Response::HTTP_SEE_OTHER);
    }
}
