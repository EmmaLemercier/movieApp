<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Personne;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PersonneController extends Controller
{
    public function listAction()
    {
        $personnes = $this->getDoctrine()
                         ->getRepository(Personne::class)
                         ->findAll();
                
        return $this->render('@Main/Personne/liste.html.twig', array(
            'personnes' => $personnes
                ));
    }
    
    public function detailAction($idPersonne)
    {
        $personne = $this->getDoctrine()
                         ->getRepository(Personne::class)
                         ->find($idPersonne);
        
        return $this->render('@Main/Personne/detail.html.twig', array(
            'personne' => $personne
                ));
    }
}