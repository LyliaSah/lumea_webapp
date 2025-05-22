<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeConnexionController extends AbstractController
{
    #[Route('/connexion', name: 'app_home_connexion')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
         if ($this->getUser()) {
            return $this->redirectToRoute('app_lumea');
        }
        // Récupère l'erreur de connexion s'il y en a
        $error = $authenticationUtils->getLastAuthenticationError();
        $email = $authenticationUtils->getLastUsername(); 

        return $this->render('home_connexion/index.html.twig', [
            'email' => $email,
            'error' => $error,
        ]);
    }

    #[Route('/accueil-lumea', name: 'app_lumea')]
    public function accueil(): Response
    {
        return $this->render('lumea/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }
}
