<?php

namespace App\Form;

use App\Entity\Devis;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('prenom', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('email', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('telephone', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('dateDeDepart', TextType::class, [
                "label" => false,
                'required'   => false,

                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('adresseDeDepart', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('codePostalDeDepart', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('villeDeDepart', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('etageDeDepart', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add(
                'ascenseurDepart',
                ChoiceType::class,
                array(
                    'label' => false,
                    'attr' => ['class' => 'form-select'],
                    'choices' => array(
                        "Pas d'ascenseur" => "Pas d'ascenseur",
                        'petit (1 à 2 personnes)' => "petit (1 à 2 personnes)",
                        'moyen (3 à 6 personnes)' => "moyen (3 à 6 personnes)",
                        'grand (6 personnes et plus)' => "grand (6 personnes et plus)",
                    )
                )
            )
            ->add('dateArrivee', TextType::class, [
                "label" => false,
                'required'   => false,

                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('adresseArrivee', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('codePostalArrivee', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('villeArrivee', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('etageArrivee', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add(
                'ascenseurArrivee',
                ChoiceType::class,
                array(
                    'label' => false,
                    'attr' => ['class' => 'form-select'],
                    'choices' => array(
                        "Pas d'ascenseur" => "Pas d'ascenseur",
                        'petit (1 à 2 personnes)' => "petit (1 à 2 personnes)",
                        'moyen (3 à 6 personnes)' => "moyen (3 à 6 personnes)",
                        'grand (6 personnes et plus)' => "grand (6 personnes et plus)",
                    )
                )
            )
            ->add('volume', null, [
                "label" => false,
                "attr" => [

                    'class' => 'form-control'
                ]
            ])
            ->add('message', null, [
                "label" => false,
                "attr" => [
                    "placeholder" => "Entrez votre message",
                    'class' => 'form-control'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Devis::class,
        ]);
    }
}
