<?php
// src/Controller/FicheEmotionsController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FicheEmotionsController extends AbstractController
{
    #[Route('/fiche-emotions', name: 'app_fiche_emotions')]
    public function index(): Response
    {
        return $this->render('fiche_emotions/index.html.twig', [
            'controller_name' => 'FicheEmotionsController',
    ]);
    }
}
