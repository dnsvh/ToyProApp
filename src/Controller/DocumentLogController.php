<?php
// src/Controller/DocumentLogController.php

namespace App\Controller;

use App\Entity\Document;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DocumentLogController extends AbstractController
{
    /**
     * @Route("/document/{id}/logs", name="app_document_logs", methods={"GET"})
     */
    public function viewLogs(Document $document): Response
    {
        $user = $this->getUser();
        if (! $user) {
            throw $this->createAccessDeniedException('You must be logged in to view logs.');
        }

        $isUploader = $document->getUploadedBy()?->getId() === $user->getId();
        $isAdminOrManager = $this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_MANAGER');

        if (! $isUploader && ! $isAdminOrManager) {
            throw $this->createAccessDeniedException('You are not allowed to see logs for this document.');
        }

        return $this->render('document/logs.html.twig', [
            'document' => $document,
            'logs'     => $document->getLogs(),
        ]);
    }
}
