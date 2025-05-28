<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeConnexionController extends AbstractController
{
    #[Route('/', name: 'app_home_connexion')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà connecté, redirige vers 'app_lumea'
        if ($this->getUser()) {
            return $this->redirectToRoute('app_lumea');
        }

        // Récupère l'erreur de connexion (le cas échéant)
        $error = $authenticationUtils->getLastAuthenticationError();
        // Récupère le dernier nom d'utilisateur/email saisi
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
