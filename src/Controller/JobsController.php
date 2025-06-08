<?php
// src/Controller/JobsController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobsController extends AbstractController
{
    private array $jobs = [
        'order-picker' => [
            'title'      => 'Order Picker',
            'location'   => 'Nederweert',
            'type'       => 'Parttime',
            'description'=> 'Als Order Picker zorg je dat klantbestellingen accuraat en op tijd klaarstaan.'
        ],
        'voorraadbeheer'=> [
            'title'      => 'Voorraadbeheer',
            'location'   => 'Nederweert',
            'type'       => 'Parttime',
            'description'=> 'Je beheert de voorraad, signaleert tekorten en houdt de magazijnadministratie bij.'
        ],
        'php-symfony-full-stack' => [
            'title'      => 'PHP Symfony Full Stack Developer',
            'location'   => 'Nederweert (hybride)',
            'type'       => 'Fulltime / Parttime',
            'description'=> 'Je ontwikkelt en onderhoudt onze webapplicaties met Symfony en Vue/React in een hybride werkmodel.'
        ],
    ];

    #[Route('/', name: 'job_home')]
    #[Route('/jobs', name: 'job_list')]
    public function index(): Response
    {
        return $this->render('jobs/index.html.twig', [
            'jobs' => $this->jobs,
        ]);
    }

    #[Route('/jobs/{slug}', name: 'job_show')]
    public function show(string $slug): Response
    {
        if (!isset($this->jobs[$slug])) {
            throw $this->createNotFoundException('Vacature niet gevonden.');
        }

        return $this->render('jobs/show.html.twig', [
            'job' => $this->jobs[$slug],
        ]);
    }
}
