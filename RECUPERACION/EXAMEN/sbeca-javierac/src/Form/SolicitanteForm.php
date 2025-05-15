<?php

namespace App\Form;

use App\Entity\Beca;
use App\Entity\Solicitante;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SolicitanteForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('dni')
            ->add('fecha_nac')
            ->add('nomina')
            ->add('concedida')
            ->add('beca', EntityType::class, [
                'class' => Beca::class,
                'choice_label' => 'descripcion',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Solicitante::class,
        ]);
    }
}
