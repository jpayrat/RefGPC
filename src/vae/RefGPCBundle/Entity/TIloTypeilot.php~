<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TIloTypeilot
 *
 * @ORM\Table(name="t_ilo_typeilot")
 * @ORM\Entity
 */
class TIloTypeilot
{
    /**
     * @var string
     *
     * @ORM\Column(name="tiLibelleTypeIlot", type="string", length=30, nullable=true)
     */
    private $tilibelletypeilot;

    /**
     * @var string
     *
     * @ORM\Column(name="tiIdTypeIlot", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tiidtypeilot;



    /**
     * Set tilibelletypeilot
     *
     * @param string $tilibelletypeilot
     *
     * @return TIloTypeilot
     */
    public function setTilibelletypeilot($tilibelletypeilot)
    {
        $this->tilibelletypeilot = $tilibelletypeilot;

        return $this;
    }

    /**
     * Get tilibelletypeilot
     *
     * @return string
     */
    public function getTilibelletypeilot()
    {
        return $this->tilibelletypeilot;
    }

    /**
     * Get tiidtypeilot
     *
     * @return string
     */
    public function getTiidtypeilot()
    {
        return $this->tiidtypeilot;
    }
}
