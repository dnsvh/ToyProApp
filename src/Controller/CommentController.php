<?php
// src/Controller/CommentController.php

namespace App\Controller;

use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/comment')]
class CommentController extends AbstractController
{
    #[Route('/{id}/delete', name: 'comment_delete', methods: ['POST'])]
    public function delete(
        Comment $comment,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();

        if (
            ! $this->isGranted('ROLE_ADMIN')
            && $comment->getSender()->getId() !== $user->getId()
        ) {
            throw $this->createAccessDeniedException('You cannot delete this comment.');
        }

        $csrfTokenId = 'delete_comment' . $comment->getId();
        if ($this->isCsrfTokenValid($csrfTokenId, $request->request->get('_token'))) {

            $comment->setVisible(false);
            $entityManager->flush();
        }

        $announcement = $comment->getAnnouncement();
        return $this->redirectToRoute('app_announcement_show', [
            'id' => $announcement->getId(),
        ]);
    }
}
