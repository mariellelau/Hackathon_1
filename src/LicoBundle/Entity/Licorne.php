<?php

namespace LicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Licorne
 */
class Licorne
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $iDLicorne;

    /**
     * @var string
     */
    private $nomLicorne;

    /**
     * @var \LicoBundle\Entity\Environnement
     */
    private $Environnement;


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
     * Set iDLicorne
     *
     * @param integer $iDLicorne
     * @return Licorne
     */
    public function setIDLicorne($iDLicorne)
    {
        $this->iDLicorne = $iDLicorne;

        return $this;
    }

    /**
     * Get iDLicorne
     *
     * @return integer 
     */
    public function getIDLicorne()
    {
        return $this->iDLicorne;
    }

    /**
     * Set nomLicorne
     *
     * @param string $nomLicorne
     * @return Licorne
     */
    public function setNomLicorne($nomLicorne)
    {
        $this->nomLicorne = $nomLicorne;

        return $this;
    }

    /**
     * Get nomLicorne
     *
     * @return string 
     */
    public function getNomLicorne()
    {
        return $this->nomLicorne;
    }

    /**
     * Set Environnement
     *
     * @param \LicoBundle\Entity\Environnement $environnement
     * @return Licorne
     */
    public function setEnvironnement(\LicoBundle\Entity\Environnement $environnement = null)
    {
        $this->Environnement = $environnement;

        return $this;
    }

    /**
     * Get Environnement
     *
     * @return \LicoBundle\Entity\Environnement 
     */
    public function getEnvironnement()
    {
        return $this->Environnement;
    }
}
