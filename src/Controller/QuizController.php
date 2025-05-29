<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'app_quiz')]
    public function index(): Response
    {
        $faqs = [
            [
                'question' => 'Qu\'est-ce qu\'une IST ?',
                'answer' => 'Une IST est une infection transmissible lors d\'un rapport sexuel non protégé.',
            ],
            [
                'question' => 'Quels sont les moyens de contraception les plus efficaces ?',
                'answer' => 'Les moyens les plus efficaces sont la pilule contraceptive, le stérilet, et le préservatif.',
            ],
            [
                'question' => 'Comment gérer ses émotions dans une relation ?',
                'answer' => 'Communiquer ouvertement et honnêtement avec son partenaire est essentiel.',
            ],
            [
                'question' => 'Pourquoi utiliser un préservatif ?',
                'answer' => 'Le préservatif protège contre les IST et les grossesses non désirées.',
            ],
            [
                'question' => 'Quelles sont les méthodes pour parler de sexualité avec ses parents ?',
                'answer' => 'Choisir un moment calme, être honnête et poser des questions ouvertes peut aider.',
            ],
        ];

        return $this->render('quiz/index.html.twig', [
            'faqs' => $faqs,
        ]);
    }
}
