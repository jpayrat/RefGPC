<?php

namespace vae\RefGPCBundle\Entity;

/**
 * TComptes
 */
class TComptes
{
    /**
     * @var string
     */
    private $nomcompte;

    /**
     * @var string
     */
    private $mdpcompte;

    /**
     * @var string
     */
    private $emailcompte;

    /**
     * @var integer
     */
    private $idcomptes;

    /**
     * @var \vae\RefGPCBundle\Entity\TRoles
     */
    private $tRolesRolrole;


    /**
     * Set nomcompte
     *
     * @param string $nomcompte
     *
     * @return TComptes
     */
    public function setNomcompte($nomcompte)
    {
        $this->nomcompte = $nomcompte;

        return $this;
    }

    /**
     * Get nomcompte
     *
     * @return string
     */
    public function getNomcompte()
    {
        return $this->nomcompte;
    }

    /**
     * Set mdpcompte
     *
     * @param string $mdpcompte
     *
     * @return TComptes
     */
    public function setMdpcompte($mdpcompte)
    {
        $this->mdpcompte = $mdpcompte;

        return $this;
    }

    /**
     * Get mdpcompte
     *
     * @return string
     */
    public function getMdpcompte()
    {
        return $this->mdpcompte;
    }

    /**
     * Set emailcompte
     *
     * @param string $emailcompte
     *
     * @return TComptes
     */
    public function setEmailcompte($emailcompte)
    {
        $this->emailcompte = $emailcompte;

        return $this;
    }

    /**
     * Get emailcompte
     *
     * @return string
     */
    public function getEmailcompte()
    {
        return $this->emailcompte;
    }

    /**
     * Get idcomptes
     *
     * @return integer
     */
    public function getIdcomptes()
    {
        return $this->idcomptes;
    }

    /**
     * Set tRolesRolrole
     *
     * @param \vae\RefGPCBundle\Entity\TRoles $tRolesRolrole
     *
     * @return TComptes
     */
    public function setTRolesRolrole(\vae\RefGPCBundle\Entity\TRoles $tRolesRolrole = null)
    {
        $this->tRolesRolrole = $tRolesRolrole;

        return $this;
    }

    /**
     * Get tRolesRolrole
     *
     * @return \vae\RefGPCBundle\Entity\TRoles
     */
    public function getTRolesRolrole()
    {
        return $this->tRolesRolrole;
    }
}

