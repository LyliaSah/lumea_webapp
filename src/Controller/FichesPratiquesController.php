<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FichesPratiquesController extends AbstractController
{
    #[Route('/fiches/pratiques', name: 'app_fiches_pratiques')]
    public function index(): Response
    {
        return $this->render('fiches_pratiques/index.html.twig', [
            'controller_name' => 'FichesPratiquesController',
        ]);
    }
}
