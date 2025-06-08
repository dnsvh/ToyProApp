<?php
// src/Controller/ResetPasswordController.php
namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ResetPasswordController extends AbstractController
{
    public function __construct(
        private UserRepository $users,
        private EntityManagerInterface $em,
        private UserPasswordHasherInterface $hasher,
    ) {}

    #[Route('/wachtwoord-vergeten', name: 'app_forgot_password')]
    public function request(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $user  = $this->users->findOneBy(['email' => $email]);
            if ($user) {
                // TODO: generate & email real reset token.
                // For now we’ll just redirect you straight to reset form:
                return $this->redirectToRoute('app_reset_password', ['token' => 'dummy-token']);
            }
            $this->addFlash('danger', 'Dit e-mail adres is niet bij ons bekend.');
        }

        return $this->render('security/forgot_password.html.twig');
    }

    #[Route('/wachtwoord-reset/{token}', name: 'app_reset_password')]
    public function reset(Request $request, string $token): Response
    {
        // TODO: validate $token against what was emailed
        if ($request->isMethod('POST')) {
            $plain = $request->request->get('password');
            $user  = $this->getUser(); // or load by token
            if ($user) {
                $user->setPassword($this->hasher->hashPassword($user, $plain));
                $this->em->flush();
                $this->addFlash('success', 'Je wachtwoord is gewijzigd, log nu in.');
                return $this->redirectToRoute('app_login');
            }
        }

        return $this->render('security/reset_password.html.twig', [
            'token' => $token,
        ]);
    }
}
