<?php

namespace vae\RefGPCBundle\Entity;

/**
 * TInfosbase
 */
class TInfosbase
{
    /**
     * @var string
     */
    private $ibcodebase;

    /**
     * @var string
     */
    private $iblibellebase;

    /**
     * @var string
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

