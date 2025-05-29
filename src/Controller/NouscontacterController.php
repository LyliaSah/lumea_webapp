<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NouscontacterController extends AbstractController
{
    #[Route('/nous_contacter', name: 'app_nous_contacter')]
    public function index(Request $request): Response
    {
        $messageEnvoye = false;

        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $demande = $request->request->get('demande');

            // Ici tu peux ajouter la logique pour enregistrer la demande,
            // envoyer un email, etc. On simule juste un succès.
            if ($email && $demande) {
                $messageEnvoye = true;
            }
        }

        return $this->render('contact/nous_contacter.html.twig', [
            'messageEnvoye' => $messageEnvoye,
        ]);
    }
}
