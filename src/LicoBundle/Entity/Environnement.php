<?php

namespace LicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Environnement
 */
class Environnement
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $iDEnvironnement;

    /**
     * @var string
     */
    private $nomEnvironnement;


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
     * Set iDEnvironnement
     *
     * @param integer $iDEnvironnement
     * @return Environnement
     */
    public function setIDEnvironnement($iDEnvironnement)
    {
        $this->iDEnvironnement = $iDEnvironnement;

        return $this;
    }

    /**
     * Get iDEnvironnement
     *
     * @return integer 
     */
    public function getIDEnvironnement()
    {
        return $this->iDEnvironnement;
    }

    /**
     * Set nomEnvironnement
     *
     * @param string $nomEnvironnement
     * @return Environnement
     */
    public function setNomEnvironnement($nomEnvironnement)
    {
        $this->nomEnvironnement = $nomEnvironnement;

        return $this;
    }

    /**
     * Get nomEnvironnement
     *
     * @return string 
     */
    public function getNomEnvironnement()
    {
        return $this->nomEnvironnement;
    }
}
