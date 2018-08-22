<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Film;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FilmController extends Controller
{
    public function listAction()
    {
        $films = $this->getDoctrine()
                         ->getRepository(Film::class)
                         ->findAll();
                
        return $this->render('@Main/Film/liste.html.twig', array(
            'films' => $films
                ));
    }
    
    public function detailAction($idFilm)
    {
        $film = $this->getDoctrine()
                         ->getRepository(Film::class)
                         ->find($idFilm);
        
        return $this->render('@Main/Film/detail.html.twig', array(
            'film' => $film
                ));
    }
}