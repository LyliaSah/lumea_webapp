<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeConnexionController extends AbstractController
{
    #[Route('/', name: 'app_home_connexion')]
    public function index(): Response
    {
        return $this->render('home_connexion/index.html.twig', [
            'controller_name' => 'HomeConnexionController',
        ]);
    }
}
