<?php
// src/Controller/SecurityController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        // controller can be blank: it will be intercepted by the logout key on your firewall
        throw new \LogicException('This should never be reached.');
    }

    #[Route('/wachtwoord-vergeten', name: 'app_forgot_password')]
    #[Route('/forgot-password',     name: 'app_forgot_password_en')]
    public function forgot(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('email', EmailType::class, [
                'label' => 'Uw e-mail adres',
                'attr'  => ['placeholder' => 'vul uw e-mail in…']
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Verzend reset-link',
                'attr'  => ['class' => 'btn btn-primary']
            ])
            ->getForm()
        ;

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // (in a real app: look up the user, send a mail with a reset token…)
            $this->addFlash('success', 'Indien dit e-mail adres bestaat, ontvangt u binnen enkele minuten een reset-link.');
            return $this->redirectToRoute('app_forgot_password');
        }

        return $this->render('security/forgot_password.html.twig', [
            'forgotForm' => $form->createView(),
        ]);
    }

    #[Route('/wachtwoord-reset/{token}', name: 'app_reset_password_nl')]
    #[Route('/reset-password/{token}',   name: 'app_reset_password')]
    public function reset(Request $request, string $token): Response
    {
        // in a real app: validate $token, fetch the user…

        $form = $this->createFormBuilder()
            ->add('plainPassword', RepeatedType::class, [
                'type'            => PasswordType::class,
                'invalid_message' => 'De wachtwoorden komen niet overeen.',
                'first_options'   => ['label' => 'Nieuw wachtwoord'],
                'second_options'  => ['label' => 'Herhaal wachtwoord'],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Wijzig wachtwoord',
                'attr'  => ['class' => 'btn btn-success']
            ])
            ->getForm()
        ;

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // (in a real app: hash & persist the new password for that user…)
            $this->addFlash('success', 'Uw wachtwoord is gewijzigd. U kunt nu inloggen.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/reset_password.html.twig', [
            'resetForm' => $form->createView(),
            'token'     => $token,
        ]);
    }
}
