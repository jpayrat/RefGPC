<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TmIlots
 *
 * @ORM\Table(name="TM_Ilots", indexes={@ORM\Index(name="fk_TM_Ilots_t_ilo_bandeau1_idx", columns={"t_ilo_bandeau_banIdnBandeau"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_competences1_idx", columns={"t_ilo_competences_coIdCompetence"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_typeilot1_idx", columns={"t_ilo_typeilot_tiIdTypeIlot"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_servicedemandeur1_idx", columns={"t_ilo_servicedemandeur_sedIdServDem"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_domaineactivite1_idx", columns={"t_ilo_domaineactivite_daIdDomAct"}), @ORM\Index(name="fk_TM_Ilots_t_prodsav1_idx", columns={"t_prodsav_prsIdProdSav"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_entreprise1_idx", columns={"t_ilo_entreprise_enIdEntreprise"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_used1_idx", columns={"t_ilo_used_uIdUsed"}), @ORM\Index(name="fk_TM_Ilots_t_sites1_idx", columns={"t_sites_siIdSite"}), @ORM\Index(name="fk_TM_Ilots_t_ilo_filtrage1_idx", columns={"t_ilo_filtrage_fiIdFiltrage"})})
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
     * @ORM\Column(name="iloDateCreation", type="integer", nullable=true)
     */
    private $ilodatecreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="iloDateModif", type="integer", nullable=true)
     */
    private $ilodatemodif;

    /**
     * @var integer
     *
     * @ORM\Column(name="iloDateSuppression", type="integer", nullable=true)
     */
    private $ilodatesuppression;

    /**
     * @var string
     *
     * @ORM\Column(name="t_ilo_used_uIdUsed", type="string", length=3, nullable=true)
     */
    private $tIloUsedUidused;

    /**
     * @var string
     *
     * @ORM\Column(name="t_ilo_servicedemandeur_sedIdServDem", type="string", length=15, nullable=true)
     */
    private $tIloServicedemandeurSedidservdem;

    /**
     * @var string
     *
     * @ORM\Column(name="t_prodsav_prsIdProdSav", type="string", length=15, nullable=true)
     */
    private $tProdsavPrsidprodsav;

    /**
     * @var string
     *
     * @ORM\Column(name="t_ilo_domaineactivite_daIdDomAct", type="string", length=25, nullable=true)
     */
    private $tIloDomaineactiviteDaiddomact;

    /**
     * @var string
     *
     * @ORM\Column(name="t_ilo_competences_coIdCompetence", type="string", length=70, nullable=true)
     */
    private $tIloCompetencesCoidcompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="t_sites_siIdSite", type="string", length=10, nullable=true)
     */
    private $tSitesSiidsite;

    /**
     * @var string
     *
     * @ORM\Column(name="t_ilo_entreprise_enIdEntreprise", type="string", length=20, nullable=true)
     */
    private $tIloEntrepriseEnidentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="t_ilo_filtrage_fiIdFiltrage", type="string", length=20, nullable=true)
     */
    private $tIloFiltrageFiidfiltrage;

    /**
     * @var string
     *
     * @ORM\Column(name="t_ilo_typeilot_tiIdTypeIlot", type="string", length=3, nullable=true)
     */
    private $tIloTypeilotTiidtypeilot;

    /**
     * @var string
     *
     * @ORM\Column(name="t_ilo_bandeau_banIdnBandeau", type="string", length=3, nullable=true)
     */
    private $tIloBandeauBanidnbandeau;

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
     * Set tIloUsedUidused
     *
     * @param string $tIloUsedUidused
     *
     * @return TmIlots
     */
    public function setTIloUsedUidused($tIloUsedUidused)
    {
        $this->tIloUsedUidused = $tIloUsedUidused;

        return $this;
    }

    /**
     * Get tIloUsedUidused
     *
     * @return string
     */
    public function getTIloUsedUidused()
    {
        return $this->tIloUsedUidused;
    }

    /**
     * Set tIloServicedemandeurSedidservdem
     *
     * @param string $tIloServicedemandeurSedidservdem
     *
     * @return TmIlots
     */
    public function setTIloServicedemandeurSedidservdem($tIloServicedemandeurSedidservdem)
    {
        $this->tIloServicedemandeurSedidservdem = $tIloServicedemandeurSedidservdem;

        return $this;
    }

    /**
     * Get tIloServicedemandeurSedidservdem
     *
     * @return string
     */
    public function getTIloServicedemandeurSedidservdem()
    {
        return $this->tIloServicedemandeurSedidservdem;
    }

    /**
     * Set tProdsavPrsidprodsav
     *
     * @param string $tProdsavPrsidprodsav
     *
     * @return TmIlots
     */
    public function setTProdsavPrsidprodsav($tProdsavPrsidprodsav)
    {
        $this->tProdsavPrsidprodsav = $tProdsavPrsidprodsav;

        return $this;
    }

    /**
     * Get tProdsavPrsidprodsav
     *
     * @return string
     */
    public function getTProdsavPrsidprodsav()
    {
        return $this->tProdsavPrsidprodsav;
    }

    /**
     * Set tIloDomaineactiviteDaiddomact
     *
     * @param string $tIloDomaineactiviteDaiddomact
     *
     * @return TmIlots
     */
    public function setTIloDomaineactiviteDaiddomact($tIloDomaineactiviteDaiddomact)
    {
        $this->tIloDomaineactiviteDaiddomact = $tIloDomaineactiviteDaiddomact;

        return $this;
    }

    /**
     * Get tIloDomaineactiviteDaiddomact
     *
     * @return string
     */
    public function getTIloDomaineactiviteDaiddomact()
    {
        return $this->tIloDomaineactiviteDaiddomact;
    }

    /**
     * Set tIloCompetencesCoidcompetence
     *
     * @param string $tIloCompetencesCoidcompetence
     *
     * @return TmIlots
     */
    public function setTIloCompetencesCoidcompetence($tIloCompetencesCoidcompetence)
    {
        $this->tIloCompetencesCoidcompetence = $tIloCompetencesCoidcompetence;

        return $this;
    }

    /**
     * Get tIloCompetencesCoidcompetence
     *
     * @return string
     */
    public function getTIloCompetencesCoidcompetence()
    {
        return $this->tIloCompetencesCoidcompetence;
    }

    /**
     * Set tSitesSiidsite
     *
     * @param string $tSitesSiidsite
     *
     * @return TmIlots
     */
    public function setTSitesSiidsite($tSitesSiidsite)
    {
        $this->tSitesSiidsite = $tSitesSiidsite;

        return $this;
    }

    /**
     * Get tSitesSiidsite
     *
     * @return string
     */
    public function getTSitesSiidsite()
    {
        return $this->tSitesSiidsite;
    }

    /**
     * Set tIloEntrepriseEnidentreprise
     *
     * @param string $tIloEntrepriseEnidentreprise
     *
     * @return TmIlots
     */
    public function setTIloEntrepriseEnidentreprise($tIloEntrepriseEnidentreprise)
    {
        $this->tIloEntrepriseEnidentreprise = $tIloEntrepriseEnidentreprise;

        return $this;
    }

    /**
     * Get tIloEntrepriseEnidentreprise
     *
     * @return string
     */
    public function getTIloEntrepriseEnidentreprise()
    {
        return $this->tIloEntrepriseEnidentreprise;
    }

    /**
     * Set tIloFiltrageFiidfiltrage
     *
     * @param string $tIloFiltrageFiidfiltrage
     *
     * @return TmIlots
     */
    public function setTIloFiltrageFiidfiltrage($tIloFiltrageFiidfiltrage)
    {
        $this->tIloFiltrageFiidfiltrage = $tIloFiltrageFiidfiltrage;

        return $this;
    }

    /**
     * Get tIloFiltrageFiidfiltrage
     *
     * @return string
     */
    public function getTIloFiltrageFiidfiltrage()
    {
        return $this->tIloFiltrageFiidfiltrage;
    }

    /**
     * Set tIloTypeilotTiidtypeilot
     *
     * @param string $tIloTypeilotTiidtypeilot
     *
     * @return TmIlots
     */
    public function setTIloTypeilotTiidtypeilot($tIloTypeilotTiidtypeilot)
    {
        $this->tIloTypeilotTiidtypeilot = $tIloTypeilotTiidtypeilot;

        return $this;
    }

    /**
     * Get tIloTypeilotTiidtypeilot
     *
     * @return string
     */
    public function getTIloTypeilotTiidtypeilot()
    {
        return $this->tIloTypeilotTiidtypeilot;
    }

    /**
     * Set tIloBandeauBanidnbandeau
     *
     * @param string $tIloBandeauBanidnbandeau
     *
     * @return TmIlots
     */
    public function setTIloBandeauBanidnbandeau($tIloBandeauBanidnbandeau)
    {
        $this->tIloBandeauBanidnbandeau = $tIloBandeauBanidnbandeau;

        return $this;
    }

    /**
     * Get tIloBandeauBanidnbandeau
     *
     * @return string
     */
    public function getTIloBandeauBanidnbandeau()
    {
        return $this->tIloBandeauBanidnbandeau;
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
}
