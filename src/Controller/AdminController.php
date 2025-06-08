<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminUserRegistrationType;
use App\Form\AdminUserManagementType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'admin_index', methods: ['GET'])]
    public function index(): Response
    {
        // simple dashboard linking to the two subpages
        return $this->render('admin/index.html.twig');
    }

    #[Route('/usermanagement', name: 'admin_usermanagement', methods: ['GET'])]
    public function manage(UserRepository $repo): Response
    {
        $users = $repo->findAll();
        return $this->render('admin/usermanagement.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/usermanagement/{id}/edit', name: 'admin_usermanagement_edit', methods: ['GET','POST'])]
    public function editUser(
        User $user,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $form = $this->createForm(AdminUserManagementType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Gebruiker '.$user->getEmail().' is bijgewerkt.');
            return $this->redirectToRoute('admin_usermanagement');
        }

        return $this->render('admin/usermanagement_edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/userregistration', name: 'admin_userregistration', methods: ['GET', 'POST'])]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $em
    ): Response {
        $user = new User();
        $form = $this->createForm(AdminUserRegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // hash & set the password
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword(
                $passwordHasher->hashPassword($user, $plainPassword)
            );
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Gebruiker '.$user->getEmail().' is aangemaakt.');
            return $this->redirectToRoute('admin_userregistration');
        }

        return $this->render('admin/userregistration.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
