<?php

namespace App\Controller;

use App\Entity\AppUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LumeaController extends AbstractController
{
    #[Route('/lumea', name: 'app_lumea')]
    public function index(): Response
    {
        /** @var AppUser|null $user */
        $user = $this->getUser();

        return $this->render('lumea/index.html.twig', [
            'user' => $user,
            'controller_name' => 'LumeaController',
        ]);
    }
}
