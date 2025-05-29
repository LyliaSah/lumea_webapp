<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfessionnelsController extends AbstractController
{
    #[Route('/professionnels', name: 'app_professionnels')]
    public function index(): Response
    {
        $structures = [
            [
                'icone' => '🏥',
                'nom' => 'Centre de Planning Familial de Grenoble',
                'description' => 'Conseil, écoute, accompagnement pour la santé sexuelle et reproductive.',
                'adresse' => '25 Avenue Jean Perrot, Grenoble',
                'tel' => '04 76 98 76 54',
                'site' => 'http://www.planningfamilial38.org',
            ],
            [
                'icone' => '🏥',
                'nom' => 'Centre Départemental de Prévention et de Santé (CDPS) Isère',
                'description' => 'Actions de prévention en santé pour les jeunes, ateliers, consultations.',
                'adresse' => '12 Rue Joseph Fourier, Grenoble',
                'tel' => '04 76 44 10 00',
                'site' => 'https://www.isere.fr/sante',
            ],
            [
                'icone' => '🏥',
                'nom' => 'Maison des Adolescents de l’Isère',
                'description' => 'Accueil, écoute et soutien pour les jeunes en difficulté.',
                'adresse' => '15 Rue de Strasbourg, Grenoble',
                'tel' => '04 76 96 88 88',
                'site' => '',
            ],
            [
                'icone' => '🏥',
                'nom' => 'Planning Familial de Bourgoin-Jallieu',
                'description' => 'Accompagnement et information sur la santé sexuelle.',
                'adresse' => '6 Rue des Ecoles, Bourgoin-Jallieu',
                'tel' => '04 76 99 88 77',
                'site' => '',
            ],
            [
                'icone' => '🏥',
                'nom' => 'Centre Médico-Social de Voiron',
                'description' => 'Consultations, soutien et prévention auprès des jeunes.',
                'adresse' => '12 Place des Tilleuls, Voiron',
                'tel' => '04 76 50 12 34',
                'site' => '',
            ],
            [
                'icone' => '🏥',
                'nom' => 'Maison de la Santé de Saint-Martin-d’Hères',
                'description' => 'Consultations pluridisciplinaires et soutien.',
                'adresse' => '3 Avenue de la République, St-Martin-d’Hères',
                'tel' => '04 76 78 90 12',
                'site' => '',
            ],
            [
                'icone' => '🏥',
                'nom' => 'Association Santé Jeunes Isère',
                'description' => 'Information et accompagnement sur la santé sexuelle et mentale.',
                'adresse' => '22 Rue Voltaire, Grenoble',
                'tel' => '04 76 65 43 21',
                'site' => '',
            ],
            [
                'icone' => '🏥',
                'nom' => 'Centre Social et Culturel de Vienne',
                'description' => 'Ateliers et actions de prévention santé pour les jeunes.',
                'adresse' => '10 Place de la République, Vienne',
                'tel' => '04 74 53 44 55',
                'site' => '',
            ],
            [
                'icone' => '🏥',
                'nom' => 'Maison de la Santé de Voiron',
                'description' => 'Accompagnement santé globale des jeunes.',
                'adresse' => '18 Rue Gambetta, Voiron',
                'tel' => '04 76 50 22 33',
                'site' => '',
            ],
            [
                'icone' => '🏥',
                'nom' => 'Centre Social des Balmes à Grenoble',
                'description' => 'Actions de prévention et soutien pour les jeunes.',
                'adresse' => '5 Rue des Balmes, Grenoble',
                'tel' => '04 76 24 68 10',
                'site' => '',
            ],
        ];

        return $this->render('professionnels/index.html.twig', [
            'structures' => $structures,
        ]);
    }
}
