<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LogoutController extends AbstractController
{
    #[Route('/logout', name: 'app_logout')]
    public function index(): Response
    {
             $user = $this->getUser();
             
        return $this->render('login/index.html.twig', [
            'user' => $user,
            'controller_name' => 'LoginController',
        ]);
    }
}
