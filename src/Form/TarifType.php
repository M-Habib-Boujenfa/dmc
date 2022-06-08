<?php

namespace App\Form;

use App\Entity\Tarif;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TarifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', null, ["label" => false, "attr" => [

                'class' => 'form-control'
            ]])
            ->add('commentaire', null, ["label" => false, "attr" => [

                'class' => 'form-control'
            ]])
            ->add('acompte', null, ["label" => false, "attr" => [

                'class' => 'form-control'
            ]])
            ->add('tarifHt', null, ["label" => false, "attr" => [

                'class' => 'form-control'
            ]]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tarif::class,
        ]);
    }
}
