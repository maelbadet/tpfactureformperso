<?php

namespace App\Form;

use App\Entity\Commande;
use App\Repository\CommandeRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureDeroulantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ncom', EntityType::class,[
                'class' => Commande::class,
                'label' => 'numéro de commande',
                'placeholder' => 'choisir une facture',
                'mapped' => false,
                'query_builder' => fn(CommandeRepository $commandeRepository) =>
                $commandeRepository->createQueryBuilder('c')->orderBy('c.ncli','ASC')
            ])
            ->add('valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
