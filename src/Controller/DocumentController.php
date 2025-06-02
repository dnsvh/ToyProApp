<?php
// src/Controller/DocumentController.php

namespace App\Controller;

use App\Entity\Document;
use App\Entity\DocumentLog;
use App\Form\DocumentType;
use App\Repository\DocumentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{
    Request,
    Response
};
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[Route('/document')]
class DocumentController extends AbstractController
{
    #[Route('/', name: 'app_document_index', methods: ['GET'])]
    public function index(DocumentRepository $repo): Response
    {
        $user = $this->getUser();

        $documents = $repo->findForUser($user);

        return $this->render('document/index.html.twig', [
            'documents' => $documents,
        ]);
    }

    #[Route('/new', name: 'app_document_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $document = new Document();
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $uploadedFile */
            $uploadedFile = $form->get('documentFile')->getData();
            if ($uploadedFile) {
                $newFilename = uniqid().'.'.$uploadedFile->guessExtension();
                try {
                    $uploadedFile->move(
                        $this->getParameter('documents_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {

                }
                $document->setFilename($newFilename);
            }

            // log “created”
            $log = new DocumentLog();
            $log->setAction('created');
            $log->setPerformedBy($this->getUser());
            $document->addLog($log);

            $document->setUploadedBy($this->getUser());
            $em->persist($document);
            $em->persist($log);
            $em->flush();

            return $this->redirectToRoute('app_document_index');
        }

        return $this->renderForm('document/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_document_show', methods: ['GET'])]
    public function show(Document $document): Response
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('document/show.html.twig', [
            'document' => $document,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_document_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Document $document,
        EntityManagerInterface $em
    ): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $oldFilename = $document->getFilename();
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $uploadedFile */
            $uploadedFile = $form->get('documentFile')->getData();
            if ($uploadedFile) {
                $newFilename = uniqid().'.'.$uploadedFile->guessExtension();
                try {
                    $uploadedFile->move(
                        $this->getParameter('documents_directory'),
                        $newFilename
                    );
                    // optionally delete old file
                    $oldPath = $this->getParameter('documents_directory').'/'.$oldFilename;
                    if (file_exists($oldPath)) {
                        @unlink($oldPath);
                    }
                } catch (FileException $e) {
                    // handle exception if needed
                }
                $document->setFilename($newFilename);
            } else {
                // keep the old filename if no new file uploaded
                $document->setFilename($oldFilename);
            }

            $log = new DocumentLog();
            $log->setAction('edited');
            $log->setPerformedBy($this->getUser());
            $document->addLog($log);
            $em->persist($log);

            $em->flush();
            return $this->redirectToRoute('app_document_index');
        }

        return $this->renderForm('document/edit.html.twig', [
            'form'            => $form,
            'currentFilename' => $document->getFilename(),
        ]);
    }

    #[Route('/{id}/logs', name: 'app_document_logs', methods: ['GET'])]
    public function logs(Document $document): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('document/logs.html.twig', [
            'document' => $document,
            'logs'     => $document->getLogs(),
        ]);
    }

    #[Route('/{id}', name: 'app_document_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Document $document,
        EntityManagerInterface $em
    ): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        if ($this->isCsrfTokenValid('delete'.$document->getId(), $request->request->get('_token'))) {
            $log = new DocumentLog();
            $log->setAction('deleted');
            $log->setPerformedBy($this->getUser());
            $document->addLog($log);
            $em->persist($log);

            $filePath = $this->getParameter('documents_directory').'/'.$document->getFilename();
            if (file_exists($filePath)) {
                @unlink($filePath);
            }

            $em->remove($document);
            $em->flush();
        }

        return $this->redirectToRoute('app_document_index');
    }
}
