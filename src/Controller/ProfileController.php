<?php
// src/Controller/ProfileController.php

namespace App\Controller;

use App\Form\ChangePasswordFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $user = $this->getUser();
        if (! $user) {
            throw $this->createAccessDeniedException('U moet ingelogd zijn.');
        }

        // build the change‐password form
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // hash & save new password
            $newPlain = $form->get('newPassword')->getData();
            $user->setPassword(
                $passwordHasher->hashPassword($user, $newPlain)
            );
            $em->flush();

            $this->addFlash('success', 'Wachtwoord succesvol gewijzigd.');
            return $this->redirectToRoute('app_profile');
        }

        return $this->render('profile/index.html.twig', [
            'user'         => $user,
            'passwordForm' => $form->createView(),
        ]);
    }
}
