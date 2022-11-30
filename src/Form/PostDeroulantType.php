<?php

namespace App\Form;

use App\Entity\Post;
use App\Repository\CommandeRepository;
use App\Repository\PostRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostDeroulantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Slug', EntityType::class,[
                'class' => Post::class,
                'label' => 'choix d\'un post',
                'placeholder' => 'choisir un post',
                'mapped' => false,
                'query_builder' => fn(PostRepository $postRepository) =>
                $postRepository->createQueryBuilder('c')->orderBy('c.slug','ASC')
            ])
            ->add('valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
