<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\PersonneRepository")
 */
class Personne
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPersonne", type="string", length=255)
     */
    private $nomPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomPersonne", type="string", length=255)
     */
    private $prenomPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptifPersonne", type="text")
     */
    private $descriptifPersonne;
    
    /**
    * @ORM\ManyToMany(targetEntity="Film", mappedBy="comediensFilm")
    */
    private $filmsComedien;
    
    /**
    * @ORM\ManyToMany(targetEntity="Film", mappedBy="realisateursFilm")
    */
    private $filmsRealisateur;
    
    /**
    * @ORM\ManyToMany(targetEntity="Film", mappedBy="scenaristesFilm")
    */
    private $filmsScenariste;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomPersonne
     *
     * @param string $nomPersonne
     *
     * @return Personne
     */
    public function setNomPersonne($nomPersonne)
    {
        $this->nomPersonne = $nomPersonne;

        return $this;
    }

    /**
     * Get nomPersonne
     *
     * @return string
     */
    public function getNomPersonne()
    {
        return $this->nomPersonne;
    }

    /**
     * Set prenomPersonne
     *
     * @param string $prenomPersonne
     *
     * @return Personne
     */
    public function setPrenomPersonne($prenomPersonne)
    {
        $this->prenomPersonne = $prenomPersonne;

        return $this;
    }

    /**
     * Get prenomPersonne
     *
     * @return string
     */
    public function getPrenomPersonne()
    {
        return $this->prenomPersonne;
    }

    /**
     * Set descriptifPersonne
     *
     * @param string $descriptifPersonne
     *
     * @return Personne
     */
    public function setDescriptifPersonne($descriptifPersonne)
    {
        $this->descriptifPersonne = $descriptifPersonne;

        return $this;
    }

    /**
     * Get descriptifPersonne
     *
     * @return string
     */
    public function getDescriptifPersonne()
    {
        return $this->descriptifPersonne;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->filmsComedien = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filmsRealisateur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filmsScenariste = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add filmComedien
     *
     * @param \MainBundle\Entity\Personne $filmComedien
     *
     * @return Personne
     */
    public function addFilmComedien(\MainBundle\Entity\Personne $filmComedien)
    {
        $this->filmsComedien[] = $filmComedien;

        return $this;
    }

    /**
     * Remove filmComedien
     *
     * @param \MainBundle\Entity\Personne $filmComedien
     */
    public function removeFilmComedien(\MainBundle\Entity\Personne $filmComedien)
    {
        $this->filmsComedien->removeElement($filmComedien);
    }

    /**
     * Get filmsComedien
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilmsComedien()
    {
        return $this->filmsComedien;
    }

    /**
     * Add filmRealisateur
     *
     * @param \MainBundle\Entity\Personne $filmRealisateur
     *
     * @return Personne
     */
    public function addFilmRealisateur(\MainBundle\Entity\Personne $filmRealisateur)
    {
        $this->filmsRealisateur[] = $filmRealisateur;

        return $this;
    }

    /**
     * Remove filmRealisateur
     *
     * @param \MainBundle\Entity\Personne $filmRealisateur
     */
    public function removeFilmRealisateur(\MainBundle\Entity\Personne $filmRealisateur)
    {
        $this->filmsRealisateur->removeElement($filmRealisateur);
    }

    /**
     * Get filmsRealisateur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilmsRealisateur()
    {
        return $this->filmsRealisateur;
    }

    /**
     * Add filmScenariste
     *
     * @param \MainBundle\Entity\Personne $filmScenariste
     *
     * @return Personne
     */
    public function addFilmScenariste(\MainBundle\Entity\Personne $filmScenariste)
    {
        $this->filmsScenariste[] = $filmScenariste;

        return $this;
    }

    /**
     * Remove filmScenariste
     *
     * @param \MainBundle\Entity\Personne $filmScenariste
     */
    public function removeFilmScenariste(\MainBundle\Entity\Personne $filmScenariste)
    {
        $this->filmsScenariste->removeElement($filmScenariste);
    }

    /**
     * Get filmsScenariste
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilmsScenariste()
    {
        return $this->filmsScenariste;
    }
}
