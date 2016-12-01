<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TInfosbase
 *
 * @ORM\Table(name="t_infosBase")
 * @ORM\Entity
 */
class TInfosbase
{
    /**
     * @var string
     *
     * @ORM\Column(name="ibCodeBase", type="string", length=2, nullable=true)
     */
    private $ibcodebase;

    /**
     * @var string
     *
     * @ORM\Column(name="ibLibelleBase", type="string", length=50, nullable=true)
     */
    private $iblibellebase;

    /**
     * @var string
     *
     * @ORM\Column(name="ibIdInfosBase", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ibidinfosbase;



    /**
     * Set ibcodebase
     *
     * @param string $ibcodebase
     *
     * @return TInfosbase
     */
    public function setIbcodebase($ibcodebase)
    {
        $this->ibcodebase = $ibcodebase;

        return $this;
    }

    /**
     * Get ibcodebase
     *
     * @return string
     */
    public function getIbcodebase()
    {
        return $this->ibcodebase;
    }

    /**
     * Set iblibellebase
     *
     * @param string $iblibellebase
     *
     * @return TInfosbase
     */
    public function setIblibellebase($iblibellebase)
    {
        $this->iblibellebase = $iblibellebase;

        return $this;
    }

    /**
     * Get iblibellebase
     *
     * @return string
     */
    public function getIblibellebase()
    {
        return $this->iblibellebase;
    }

    /**
     * Get ibidinfosbase
     *
     * @return string
     */
    public function getIbidinfosbase()
    {
        return $this->ibidinfosbase;
    }
}
