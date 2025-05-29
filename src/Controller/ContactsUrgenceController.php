<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactsUrgenceController extends AbstractController
{
    #[Route('/contacts-urgence', name: 'app_contacts_urgence')]
    public function index(): Response
    {
        $contacts = [
            [
                'icone' => '🧒',
                'titre' => 'Enfance en Danger',
                'numero' => '119',
                'description' => 'Protection de l’enfance, signalement de maltraitance',
                'tel' => '119'
            ],
            [
                'icone' => '♀️',
                'titre' => 'Violences Femmes Info',
                'numero' => '3919',
                'description' => 'Écoute, aide, orientation pour victimes de violences conjugales',
                'tel' => '3919'
            ],
            [
                'icone' => '💬',
                'titre' => 'Sexualité Info Service',
                'numero' => '0800 08 11 11',
                'description' => 'Écoute et information sur la sexualité',
                'tel' => '0800081111'
            ],
            [
                'icone' => '🆘',
                'titre' => 'SOS Viol',
                'numero' => '0 800 05 95 95',
                'description' => 'Accompagnement des victimes de viol',
                'tel' => '0800059595'
            ],
            [
                'icone' => '🩺',
                'titre' => 'Contraception d\'urgence',
                'numero' => '0800 08 11 11',
                'description' => 'Information et orientation pour contraception d’urgence',
                'tel' => '0800081111'
            ],
        ];

        return $this->render('contacts_urgence/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }
}
