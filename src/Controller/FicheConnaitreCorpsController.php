<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FicheConnaitreCorpsController extends AbstractController
{
    #[Route('/fiche/connaitre/corps', name: 'app_fiche_connaitre_corps')]
    public function index(): Response
    {
        return $this->render('fiche_connaitre_corps/index.html.twig', [
            'controller_name' => 'FicheConnaitreCorpsController',
        ]);
    }
}
