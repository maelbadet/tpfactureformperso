<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\FactureDeroulantType;
use App\Form\FormFactureType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FactureController extends AbstractController
{
    

    #[Route('/formulaireFacture', name: 'formulaire_facture')]
    public function affiche(ManagerRegistry $doc1, Request $request) : Response
    {

        $em = $doc1->getManager();

        $commande = new Commande();

        $form = $this->createForm(FormFactureType::class, $commande);
        $form = $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $ncom = $form->getData()->getNcom();
            return $this->redirectToRoute('facture', ['ncom' => $ncom]);
        }
     

        return $this->renderForm('formulaireFacture/new.html.twig', [
            'form' => $form,
            
        ]);
        
    }

    #[Route('/facture', name: 'type_facture')]
    public function type(Request $request) : Response
    {
        $commande = new Commande();
        $form = $this->createForm(FactureDeroulantType::class, $commande);
        $form = $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $commande = $form->get('ncom')->getData();
            if(null == $commande) return $this->redirectToRoute('homepage');
            return $this->render('facture/index.html.twig', [
                'commande' => $commande,
            ]);
        }
     

        return $this->renderForm('formulaireFacture/new.html.twig', [
            'form' => $form,
            
        ]);
        
    }

    #[Route('/facture/{ncom}', name: 'facture')]
    public function type1(Commande $commande) : Response
    {
        return $this->render('facture/index.html.twig', [
            'commande' => $commande,
        ]);
    }

}