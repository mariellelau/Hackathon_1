<?php

namespace LicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 */
class Utilisateur
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $iDUtilisateur;

    /**
     * @var string
     */
    private $nom;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iDUtilisateur
     *
     * @param integer $iDUtilisateur
     * @return Utilisateur
     */
    public function setIDUtilisateur($iDUtilisateur)
    {
        $this->iDUtilisateur = $iDUtilisateur;

        return $this;
    }

    /**
     * Get iDUtilisateur
     *
     * @return integer 
     */
    public function getIDUtilisateur()
    {
        return $this->iDUtilisateur;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
}
