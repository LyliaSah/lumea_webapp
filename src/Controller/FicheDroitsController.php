<?php
// src/Controller/FicheDroitsController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FicheDroitsController extends AbstractController
{
    #[Route('/fiche-droits', name: 'app_fiche_droits')]
    public function index(): Response
    {
        return $this->render('fiche_droits/index.html.twig', [
            'controller_name' => 'FicheDroitsController',
            'title' => "Connaître ses droits et faire face aux abus",
            'desc' => "Ce que dit la loi, détecter les abus, demander de l’aide... Contenu réservé à un public de plus de 15 ans",
        ]);
    }
}
