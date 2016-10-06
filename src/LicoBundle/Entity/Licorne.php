<?php

namespace LicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Licorne
 */
class Licorne
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $iDLicorne;

    /**
     * @var string
     */
    private $nomLicorne;


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

    Licorne:
        type: Licorne
    oneToMany:
        children:
            targetEntity: Licorne
            mappedBy: Environnement
    manyToOne:
        parent:
            targetEntity: Licorne
            inversedBy: Licorne

}