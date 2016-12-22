<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TmIlots
 *
 * @ORM\Table(name="TM_Ilots", indexes={@ORM\Index(name="fk_TM_Ilots_t_ilo_bandeau1_idx", columns={"t_ilo_banIdBandeau"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_typeilot1_idx", columns={"t_ilo_tiIdTypeIlot"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_servicedemandeur1_idx", columns={"t_ilo_sedIdServDem"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_domaineactivite1_idx", columns={"t_ilo_daIdDomAct"}), @ORM\Index(name="fk_TM_Ilots_t_prodsav1_idx", columns={"t_ilo_prsIdProdSav"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_entreprise1_idx", columns={"t_ilo_enIdEntreprise"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_used1_idx", columns={"t_ilo_used"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_filtrage1_idx", columns={"t_ilo_fiIdFiltrage"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_competences1_idx", columns={"t_ilo_coIdCompetence"}), @ORM\Index(name="t_sites_siIdSite_2", columns={"t_sites_siIdSite"})})
 * @ORM\Entity
 */
class TmIlots
{
    /**
     * @var string
     *
     * @ORM\Column(name="iloLibelleIlot", type="string", length=65, nullable=true)
     */
    private $ilolibelleilot;

    /**
     * @var string
     *
     * @ORM\Column(name="iloOptim", type="string", length=1, nullable=true)
     */
    private $ilooptim;

    /**
     * @var string
     *
     * @ORM\Column(name="IloCodeEtablissement", type="string", length=3, nullable=true)
     */
    private $ilocodeetablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="iloInfo", type="string", length=600, nullable=true)
     */
    private $iloinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="iloInfoAdmin", type="string", length=600, nullable=true)
     */
    private $iloinfoadmin;

    /**
     * @var integer
     *
     * @ORM\Column(name="iloDateCreation", type="bigint", nullable=true)
     */
    private $ilodatecreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="iloDateModif", type="bigint", nullable=true)
     */
    private $ilodatemodif;

    /**
     * @var integer
     *
     * @ORM\Column(name="iloDateSuppression", type="bigint", nullable=true)
     */
    private $ilodatesuppression;

    /**
     * @var string
     *
     * @ORM\Column(name="iloCodeIlot", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ilocodeilot;

    /**
     * @var string
     *
     * @ORM\Column(name="IloCodeBase", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ilocodebase;

    /**
     * @var \vae\RefGPCBundle\Entity\TSites
     *
     * @ORM\ManyToOne(targetEntity="vae\RefGPCBundle\Entity\TSites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="t_sites_siIdSite", referencedColumnName="siId")
     * })
     */
    private $tSitesSiidsite;

    /**
     * @var \vae\RefGPCBundle\Entity\TIloTypeilot
     *
     * @ORM\ManyToOne(targetEntity="vae\RefGPCBundle\Entity\TIloTypeilot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="t_ilo_tiIdTypeIlot", referencedColumnName="tiIdTypeIlot")
     * })
     */
    private $tIloTiidtypeilot;

    /**
     * @var \vae\RefGPCBundle\Entity\TIloUsed
     *
     * @ORM\ManyToOne(targetEntity="vae\RefGPCBundle\Entity\TIloUsed")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="t_ilo_used", referencedColumnName="uIdUsed")
     * })
     */
    private $tIloUsed;

    /**
     * @var \vae\RefGPCBundle\Entity\TProdsav
     *
     * @ORM\ManyToOne(targetEntity="vae\RefGPCBundle\Entity\TProdsav")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="t_ilo_prsIdProdSav", referencedColumnName="prsIdProdSav")
     * })
     */
    private $tIloPrsidprodsav;

    /**
     * @var \vae\RefGPCBundle\Entity\TIloServicedemandeur
     *
     * @ORM\ManyToOne(targetEntity="vae\RefGPCBundle\Entity\TIloServicedemandeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="t_ilo_sedIdServDem", referencedColumnName="sedId")
     * })
     */
    private $tIloSedidservdem;

    /**
     * @var \vae\RefGPCBundle\Entity\TIloFiltrage
     *
     * @ORM\ManyToOne(targetEntity="vae\RefGPCBundle\Entity\TIloFiltrage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="t_ilo_fiIdFiltrage", referencedColumnName="fiIdFiltrage")
     * })
     */
    private $tIloFiidfiltrage;

    /**
     * @var \vae\RefGPCBundle\Entity\TIloBandeau
     *
     * @ORM\ManyToOne(targetEntity="vae\RefGPCBundle\Entity\TIloBandeau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="t_ilo_banIdBandeau", referencedColumnName="banIdBandeau")
     * })
     */
    private $tIloBanidbandeau;

    /**
     * @var \vae\RefGPCBundle\Entity\TIloDomaineactivite
     *
     * @ORM\ManyToOne(targetEntity="vae\RefGPCBundle\Entity\TIloDomaineactivite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="t_ilo_daIdDomAct", referencedColumnName="daId")
     * })
     */
    private $tIloDaiddomact;

    /**
     * @var \vae\RefGPCBundle\Entity\TIloEntreprise
     *
     * @ORM\ManyToOne(targetEntity="vae\RefGPCBundle\Entity\TIloEntreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="t_ilo_enIdEntreprise", referencedColumnName="enId")
     * })
     */
    private $tIloEnidentreprise;

    /**
     * @var \vae\RefGPCBundle\Entity\TIloCompetences
     *
     * @ORM\ManyToOne(targetEntity="vae\RefGPCBundle\Entity\TIloCompetences")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="t_ilo_coIdCompetence", referencedColumnName="coId")
     * })
     */
    private $tIloCoidcompetence;
    
    
//***************************
public function getFormCodeIlotETLibelle()
{
    
    return ($this->ilocodeilot.' ['.$this->ilolibelleilot.']');
    
}
//***************************
    
    
    /**
     * Set ilolibelleilot
     *
     * @param string $ilolibelleilot
     *
     * @return TmIlots
     */
    public function setIlolibelleilot($ilolibelleilot)
    {
        $this->ilolibelleilot = $ilolibelleilot;

        return $this;
    }

    /**
     * Get ilolibelleilot
     *
     * @return string
     */
    public function getIlolibelleilot()
    {
        return $this->ilolibelleilot;
    }

    /**
     * Set ilooptim
     *
     * @param string $ilooptim
     *
     * @return TmIlots
     */
    public function setIlooptim($ilooptim)
    {
        $this->ilooptim = $ilooptim;

        return $this;
    }

    /**
     * Get ilooptim
     *
     * @return string
     */
    public function getIlooptim()
    {
        return $this->ilooptim;
    }

    /**
     * Set ilocodeetablissement
     *
     * @param string $ilocodeetablissement
     *
     * @return TmIlots
     */
    public function setIlocodeetablissement($ilocodeetablissement)
    {
        $this->ilocodeetablissement = $ilocodeetablissement;

        return $this;
    }

    /**
     * Get ilocodeetablissement
     *
     * @return string
     */
    public function getIlocodeetablissement()
    {
        return $this->ilocodeetablissement;
    }

    /**
     * Set iloinfo
     *
     * @param string $iloinfo
     *
     * @return TmIlots
     */
    public function setIloinfo($iloinfo)
    {
        $this->iloinfo = $iloinfo;

        return $this;
    }

    /**
     * Get iloinfo
     *
     * @return string
     */
    public function getIloinfo()
    {
        return $this->iloinfo;
    }

    /**
     * Set iloinfoadmin
     *
     * @param string $iloinfoadmin
     *
     * @return TmIlots
     */
    public function setIloinfoadmin($iloinfoadmin)
    {
        $this->iloinfoadmin = $iloinfoadmin;

        return $this;
    }

    /**
     * Get iloinfoadmin
     *
     * @return string
     */
    public function getIloinfoadmin()
    {
        return $this->iloinfoadmin;
    }

    /**
     * Set ilodatecreation
     *
     * @param integer $ilodatecreation
     *
     * @return TmIlots
     */
    public function setIlodatecreation($ilodatecreation)
    {
        $this->ilodatecreation = $ilodatecreation;

        return $this;
    }

    /**
     * Get ilodatecreation
     *
     * @return integer
     */
    public function getIlodatecreation()
    {
        return $this->ilodatecreation;
    }

    /**
     * Set ilodatemodif
     *
     * @param integer $ilodatemodif
     *
     * @return TmIlots
     */
    public function setIlodatemodif($ilodatemodif)
    {
        $this->ilodatemodif = $ilodatemodif;

        return $this;
    }

    /**
     * Get ilodatemodif
     *
     * @return integer
     */
    public function getIlodatemodif()
    {
        return $this->ilodatemodif;
    }

    /**
     * Set ilodatesuppression
     *
     * @param integer $ilodatesuppression
     *
     * @return TmIlots
     */
    public function setIlodatesuppression($ilodatesuppression)
    {
        $this->ilodatesuppression = $ilodatesuppression;

        return $this;
    }

    /**
     * Get ilodatesuppression
     *
     * @return integer
     */
    public function getIlodatesuppression()
    {
        return $this->ilodatesuppression;
    }

    /**
     * Set ilocodeilot
     *
     * @param string $ilocodeilot
     *
     * @return TmIlots
     */
    public function setIlocodeilot($ilocodeilot)
    {
        $this->ilocodeilot = $ilocodeilot;

        return $this;
    }

    /**
     * Get ilocodeilot
     *
     * @return string
     */
    public function getIlocodeilot()
    {
        return $this->ilocodeilot;
    }

    /**
     * Set ilocodebase
     *
     * @param string $ilocodebase
     *
     * @return TmIlots
     */
    public function setIlocodebase($ilocodebase)
    {
        $this->ilocodebase = $ilocodebase;

        return $this;
    }

    /**
     * Get ilocodebase
     *
     * @return string
     */
    public function getIlocodebase()
    {
        return $this->ilocodebase;
    }

    /**
     * Set tSitesSiidsite
     *
     * @param \vae\RefGPCBundle\Entity\TSites $tSitesSiidsite
     *
     * @return TmIlots
     */
    public function setTSitesSiidsite(\vae\RefGPCBundle\Entity\TSites $tSitesSiidsite = null)
    {
        $this->tSitesSiidsite = $tSitesSiidsite;

        return $this;
    }

    /**
     * Get tSitesSiidsite
     *
     * @return \vae\RefGPCBundle\Entity\TSites
     */
    public function getTSitesSiidsite()
    {
        return $this->tSitesSiidsite;
    }

    /**
     * Set tIloTiidtypeilot
     *
     * @param \vae\RefGPCBundle\Entity\TIloTypeilot $tIloTiidtypeilot
     *
     * @return TmIlots
     */
    public function setTIloTiidtypeilot(\vae\RefGPCBundle\Entity\TIloTypeilot $tIloTiidtypeilot = null)
    {
        $this->tIloTiidtypeilot = $tIloTiidtypeilot;

        return $this;
    }

    /**
     * Get tIloTiidtypeilot
     *
     * @return \vae\RefGPCBundle\Entity\TIloTypeilot
     */
    public function getTIloTiidtypeilot()
    {
        return $this->tIloTiidtypeilot;
    }

    /**
     * Set tIloUsed
     *
     * @param \vae\RefGPCBundle\Entity\TIloUsed $tIloUsed
     *
     * @return TmIlots
     */
    public function setTIloUsed(\vae\RefGPCBundle\Entity\TIloUsed $tIloUsed = null)
    {
        $this->tIloUsed = $tIloUsed;

        return $this;
    }

    /**
     * Get tIloUsed
     *
     * @return \vae\RefGPCBundle\Entity\TIloUsed
     */
    public function getTIloUsed()
    {
        return $this->tIloUsed;
    }

    /**
     * Set tIloPrsidprodsav
     *
     * @param \vae\RefGPCBundle\Entity\TProdsav $tIloPrsidprodsav
     *
     * @return TmIlots
     */
    public function setTIloPrsidprodsav(\vae\RefGPCBundle\Entity\TProdsav $tIloPrsidprodsav = null)
    {
        $this->tIloPrsidprodsav = $tIloPrsidprodsav;

        return $this;
    }

    /**
     * Get tIloPrsidprodsav
     *
     * @return \vae\RefGPCBundle\Entity\TProdsav
     */
    public function getTIloPrsidprodsav()
    {
        return $this->tIloPrsidprodsav;
    }

    /**
     * Set tIloSedidservdem
     *
     * @param \vae\RefGPCBundle\Entity\TIloServicedemandeur $tIloSedidservdem
     *
     * @return TmIlots
     */
    public function setTIloSedidservdem(\vae\RefGPCBundle\Entity\TIloServicedemandeur $tIloSedidservdem = null)
    {
        $this->tIloSedidservdem = $tIloSedidservdem;

        return $this;
    }

    /**
     * Get tIloSedidservdem
     *
     * @return \vae\RefGPCBundle\Entity\TIloServicedemandeur
     */
    public function getTIloSedidservdem()
    {
        return $this->tIloSedidservdem;
    }

    /**
     * Set tIloFiidfiltrage
     *
     * @param \vae\RefGPCBundle\Entity\TIloFiltrage $tIloFiidfiltrage
     *
     * @return TmIlots
     */
    public function setTIloFiidfiltrage(\vae\RefGPCBundle\Entity\TIloFiltrage $tIloFiidfiltrage = null)
    {
        $this->tIloFiidfiltrage = $tIloFiidfiltrage;

        return $this;
    }

    /**
     * Get tIloFiidfiltrage
     *
     * @return \vae\RefGPCBundle\Entity\TIloFiltrage
     */
    public function getTIloFiidfiltrage()
    {
        return $this->tIloFiidfiltrage;
    }

    /**
     * Set tIloBanidbandeau
     *
     * @param \vae\RefGPCBundle\Entity\TIloBandeau $tIloBanidbandeau
     *
     * @return TmIlots
     */
    public function setTIloBanidbandeau(\vae\RefGPCBundle\Entity\TIloBandeau $tIloBanidbandeau = null)
    {
        $this->tIloBanidbandeau = $tIloBanidbandeau;

        return $this;
    }

    /**
     * Get tIloBanidbandeau
     *
     * @return \vae\RefGPCBundle\Entity\TIloBandeau
     */
    public function getTIloBanidbandeau()
    {
        return $this->tIloBanidbandeau;
    }

    /**
     * Set tIloDaiddomact
     *
     * @param \vae\RefGPCBundle\Entity\TIloDomaineactivite $tIloDaiddomact
     *
     * @return TmIlots
     */
    public function setTIloDaiddomact(\vae\RefGPCBundle\Entity\TIloDomaineactivite $tIloDaiddomact = null)
    {
        $this->tIloDaiddomact = $tIloDaiddomact;

        return $this;
    }

    /**
     * Get tIloDaiddomact
     *
     * @return \vae\RefGPCBundle\Entity\TIloDomaineactivite
     */
    public function getTIloDaiddomact()
    {
        return $this->tIloDaiddomact;
    }

    /**
     * Set tIloEnidentreprise
     *
     * @param \vae\RefGPCBundle\Entity\TIloEntreprise $tIloEnidentreprise
     *
     * @return TmIlots
     */
    public function setTIloEnidentreprise(\vae\RefGPCBundle\Entity\TIloEntreprise $tIloEnidentreprise = null)
    {
        $this->tIloEnidentreprise = $tIloEnidentreprise;

        return $this;
    }

    /**
     * Get tIloEnidentreprise
     *
     * @return \vae\RefGPCBundle\Entity\TIloEntreprise
     */
    public function getTIloEnidentreprise()
    {
        return $this->tIloEnidentreprise;
    }

    /**
     * Set tIloCoidcompetence
     *
     * @param \vae\RefGPCBundle\Entity\TIloCompetences $tIloCoidcompetence
     *
     * @return TmIlots
     */
    public function setTIloCoidcompetence(\vae\RefGPCBundle\Entity\TIloCompetences $tIloCoidcompetence = null)
    {
        $this->tIloCoidcompetence = $tIloCoidcompetence;

        return $this;
    }

    /**
     * Get tIloCoidcompetence
     *
     * @return \vae\RefGPCBundle\Entity\TIloCompetences
     */
    public function getTIloCoidcompetence()
    {
        return $this->tIloCoidcompetence;
    }
}
