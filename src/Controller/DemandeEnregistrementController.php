<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\FormulaireEnregistrerType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Form\FormError;

final class DemandeEnregistrementController extends AbstractController
{
    #[Route('/demande/enregistrement', name: 'app_demande_enregistrement')]
    public function register(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(FormulaireEnregistrerType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            // Vérifier si email existe déjà
            $existingUser = $em->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
            if ($existingUser) {
                $form->get('email')->addError(new FormError('Cette adresse e-mail est déjà utilisée.'));
            }

            if ($form->isValid()) {
                $plainPassword = $form->get('plainPassword')->getData();
                $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);
                $user->setPassword($hashedPassword);

                $em->persist($user);
                $em->flush();

                $this->addFlash('success', 'Inscription réussie. Vous pouvez maintenant vous connecter.');

                return $this->redirectToRoute('app_lumea');
            } else {
                $this->addFlash('danger', 'Inscription non valide. Veuillez vérifier vos informations.');
            }
        }

        return $this->render('demande_enregistrement/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
