<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TComptes
 *
 * @ORM\Table(name="t_comptes", indexes={@ORM\Index(name="fk_t_comptes_t_roles1_idx", columns={"t_roles_rolRole"})})
 * @ORM\Entity
 */
class TComptes
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomCompte", type="string", length=50, nullable=true)
     */
    private $nomcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="mdpCompte", type="string", length=20, nullable=true)
     */
    private $mdpcompte;

    /**
     * @var string
     *
     * @ORM\Column(name="emailCompte", type="string", length=50, nullable=true)
     */
    private $emailcompte;

    /**
     * @var integer
     *
     * @ORM\Column(name="idComptes", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomptes;

    /**
     * @var \vae\RefGPCBundle\Entity\TRoles
     *
     * @ORM\ManyToOne(targetEntity="vae\RefGPCBundle\Entity\TRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="t_roles_rolRole", referencedColumnName="rolRole")
     * })
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
