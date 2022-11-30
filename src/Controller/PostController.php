<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostDeroulantType;
use App\Form\PostType;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\PostRepository;

class PostController extends AbstractController
{
    #[Route('/post/new', name: 'post_new')]
    public function new(ManagerRegistry $doctrine, Request $request): Response
    {
        $em = $doctrine->getManager();

        $post = new Post();

        $form = $this->createForm(PostType::class, $post);

        $form = $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            $post = $form->getData();
            
            $em->persist($post);
           
            $em->flush();

            return $this->render('post/success.html.twig', ['post' => $post]);
        
        }
        return $this->renderForm('post/new.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/affichePost', name: 'AffichagePost')]
    public function show(PostRepository $postRepository) : Response
    {
        $liste = $postRepository->findAll();
        dump($liste);   

        return $this->render('post/affichage.html.twig', [
            'liste' => $liste,// 'Passage de la variable Php ($liste) à la variable Twig ({{ liste_twig }} utilisée dans le fichier index.html.twig)
        ]);
    }

    #[Route('/afficheUnPost', name: 'AffichageUnPost')]
    public function affiche(Request $request) : Response
    {
        $post = new Post();

        $form = $this->createForm(PostDeroulantType::class, $post);
        $form = $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $liste = $form->get('Slug')->getData();
            if(null == $liste) return $this->redirectToRoute('homepage');
            return $this->render('post/affichage.html.twig', [
                'liste' => $liste,
            ]);
        }
    
    }

}
