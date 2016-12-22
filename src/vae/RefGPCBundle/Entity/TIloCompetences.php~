<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TIloCompetences
 *
 * @ORM\Table(name="t_ilo_competences")
 * @ORM\Entity
 */
class TIloCompetences
{
    /**
     * @var string
     *
     * @ORM\Column(name="coIdCompetence", type="string", length=70, nullable=false)
     */
    private $coidcompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="coLibelleCompetence", type="string", length=100, nullable=true)
     */
    private $colibellecompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="coCodeBase", type="string", length=2, nullable=false)
     */
    private $cocodebase;

    /**
     * @var integer
     *
     * @ORM\Column(name="coId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coid;



    /**
     * Set coidcompetence
     *
     * @param string $coidcompetence
     *
     * @return TIloCompetences
     */
    public function setCoidcompetence($coidcompetence)
    {
        $this->coidcompetence = $coidcompetence;

        return $this;
    }

    /**
     * Get coidcompetence
     *
     * @return string
     */
    public function getCoidcompetence()
    {
        return $this->coidcompetence;
    }

    /**
     * Set colibellecompetence
     *
     * @param string $colibellecompetence
     *
     * @return TIloCompetences
     */
    public function setColibellecompetence($colibellecompetence)
    {
        $this->colibellecompetence = $colibellecompetence;

        return $this;
    }

    /**
     * Get colibellecompetence
     *
     * @return string
     */
    public function getColibellecompetence()
    {
        return $this->colibellecompetence;
    }

    /**
     * Set cocodebase
     *
     * @param string $cocodebase
     *
     * @return TIloCompetences
     */
    public function setCocodebase($cocodebase)
    {
        $this->cocodebase = $cocodebase;

        return $this;
    }

    /**
     * Get cocodebase
     *
     * @return string
     */
    public function getCocodebase()
    {
        return $this->cocodebase;
    }

    /**
     * Get coid
     *
     * @return integer
     */
    public function getCoid()
    {
        return $this->coid;
    }
}
