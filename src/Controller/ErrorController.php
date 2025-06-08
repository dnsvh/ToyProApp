<?php
// src/Controller/ErrorController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends AbstractController
{
    #[Route('/no-access', name: 'no_access')]
    public function noAccess(): Response
    {
        return $this->render('error/no_access.html.twig');
    }
}
