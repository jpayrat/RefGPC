<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TIloFiltrage
 *
 * @ORM\Table(name="t_ilo_filtrage")
 * @ORM\Entity
 */
class TIloFiltrage
{
    /**
     * @var string
     *
     * @ORM\Column(name="fiLibelleFiltrage", type="string", length=50, nullable=true)
     */
    private $filibellefiltrage;

    /**
     * @var string
     *
     * @ORM\Column(name="fiIdFiltrage", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fiidfiltrage;



    /**
     * Set filibellefiltrage
     *
     * @param string $filibellefiltrage
     *
     * @return TIloFiltrage
     */
    public function setFilibellefiltrage($filibellefiltrage)
    {
        $this->filibellefiltrage = $filibellefiltrage;

        return $this;
    }

    /**
     * Get filibellefiltrage
     *
     * @return string
     */
    public function getFilibellefiltrage()
    {
        return $this->filibellefiltrage;
    }

    /**
     * Get fiidfiltrage
     *
     * @return string
     */
    public function getFiidfiltrage()
    {
        return $this->fiidfiltrage;
    }
}
