<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobsController extends AbstractController
{
    #[Route(path: '/', name: 'app_jobs')]
    #[Route(path: '/jobs', name: 'app_jobs_list')]
    public function index(): Response
    {
        return $this->render('jobs/index.html.twig');
    }
}
