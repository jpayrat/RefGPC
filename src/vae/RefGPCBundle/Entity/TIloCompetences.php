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
     * @ORM\Column(name="coLibelleCompetence", type="string", length=100, nullable=true)
     */
    private $colibellecompetence;

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="coCodeBase", type="string", length=2, nullable=true)
     */
    private $cocodebase;

    /**
     * @var string
     *
     * @ORM\Column(name="coIdCompetence", type="string", length=70)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coidcompetence;



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
     * Get coidcompetence
     *
     * @return string
     */
    public function getCoidcompetence()
    {
        return $this->coidcompetence;
    }
}
