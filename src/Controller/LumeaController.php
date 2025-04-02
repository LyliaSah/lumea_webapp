<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LumeaController extends AbstractController
{
    #[Route('/lumea', name: 'app_lumea')]
    public function index(): Response
    {
        return $this->render('lumea/index.html.twig', [
            'controller_name' => 'LumeaController',
        ]);
    }
}
