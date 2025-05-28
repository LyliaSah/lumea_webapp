<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class LogoutSuccessController extends AbstractController
{
    #[Route('/logout/success', name: 'app_logout_success')]
    public function index(): Response
    {
        return $this->render('logout_success/index.html.twig');
    }
}
