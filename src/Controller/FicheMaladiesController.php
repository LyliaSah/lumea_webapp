<?php
// src/Controller/FicheMaladiesController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FicheMaladiesController extends AbstractController
{
    #[Route('/fiche-maladies', name: 'app_fiche_maladies')]
    public function index(): Response
    {
        return $this->render('fiche_maladies/index.html.twig', [
            'controller_name' => 'FicheMaladiesController',
    ]);
    }
}