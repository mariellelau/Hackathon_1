<?php

namespace LicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 */
class Utilisateur
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $iDUtilisateur;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Licornes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Licornes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    /**
     * Add Licornes
     *
     * @param \LicoBundle\Entity\Licorne $licornes
     * @return Utilisateur
     */
    public function addLicorne(\LicoBundle\Entity\Licorne $licornes)
    {
        $this->Licornes[] = $licornes;

        return $this;
    }

    /**
     * Remove Licornes
     *
     * @param \LicoBundle\Entity\Licorne $licornes
     */
    public function removeLicorne(\LicoBundle\Entity\Licorne $licornes)
    {
        $this->Licornes->removeElement($licornes);
    }

    /**
     * Get Licornes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLicornes()
    {
        return $this->Licornes;
    }
}
