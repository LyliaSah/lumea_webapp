<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FormulaireEnregistrerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('roles', ChoiceType::class, [
    'choices'  => [
        'Enseignant' => 'ROLE_ENSEIGNANT',
        'Directeur' => 'ROLE_DIRECTEUR',
    ],
  
    'multiple' => true,  // false = un seul rôle possible (true = plusieurs)
    'expanded' => true,   
    'label' => 'Rôle',
])
->add('password', PasswordType::class, [
                'mapped' => True,
                'label' => 'Mot de passe'
            ])
            ->add('submit', SubmitType::class, ['label' => "S'inscrire"])
            ;
    }  

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
