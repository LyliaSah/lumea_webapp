<?php
// src/Controller/FicheViolencesController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FicheViolencesController extends AbstractController
{
    #[Route('/fiche-violences', name: 'app_fiche_violences')]
    public function index(): Response
    {
        return $this->render('fiche_violences/index.html.twig', [
            'controller_name' => 'FicheViolencesController',
        ]);
    }
}
