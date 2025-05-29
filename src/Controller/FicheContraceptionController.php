<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FicheContraceptionController extends AbstractController
{
    #[Route('/fiche-contraception', name: 'app_fiche_contraception')]
    public function index(): Response
    {
        return $this->render('fiche_contraception/index.html.twig', [
            'controller_name' => 'FicheContraceptionController',
        ]);
    }
}
