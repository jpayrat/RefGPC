<?php

namespace vae\RefGPCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use vae\RefGPCBundle\usrClass\InfosBase;
use vae\RefGPCBundle\Form\searchIlotForm;


use vae\RefGPCBundle\Entity\TmIlots;
//use vae\RefGPCBundle\Entity\TIloCompetences;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;


/**
 * Description of Ilot
 *
 * @author julien
 */

class IlotController extends Controller {
    //put your code here

    public function ajaxIlotSearchAction($base, Request $request )
    {
        if ($request->isXmlHttpRequest()) {
        
            $categorie = 'ilot';  
            $repo = $this->getDoctrine()->getManager();
            
            $infoBases = new InfosBase($repo, $base, $categorie);
                $libelleBase = $infoBases->getLibelleBase();
                $codeBase = $infoBases->getCodeBase();
                
            // récupération des données formulaire
            $valselect = $request->request->get('search_ilot_form');
  
            $repositoryIlot = $repo->getRepository('vaeRefGPCBundle:TmIlots');
 
            $qb = $repositoryIlot->createQueryBuilder('u');
            $qb->where('u.ilocodebase = :codebase')
                ->setParameter('codebase', $codeBase);
            
            if($valselect['RechercheGlobale'] != '')
            {
                $qb->leftJoin('u.tSitesSiidsite', 'v' );
                $qb->leftJoin('u.tIloTiidtypeilot', 'w' );
                $qb->leftJoin('u.tIloCoidcompetence', 'x' );
                $qb->leftJoin('u.tIloUsed', 'y' );
                $qb->leftJoin('u.tIloSedidservdem', 'z' );
                $qb->leftJoin('u.tIloEnidentreprise', 'a' );
                $qb->leftJoin('u.tIloDaiddomact', 'b' );
                
                $qb->andwhere('u.ilocodeilot LIKE :globale'
                        . ' OR  w.tiidtypeilot LIKE :globale'
                        . ' OR  w.tilibelletypeilot LIKE :globale'
                        . ' OR  x.coidcompetence LIKE :globale'
                        . ' OR  y.uidused LIKE :globale'
                        . ' OR  z.sedidservdem LIKE :globale'
                        . ' OR  z.sedlibelleservdem LIKE :globale'
                        . ' OR  a.enidentreprise LIKE :globale'
                        . ' OR  a.enlibelleentreprise LIKE :globale'
                        . ' OR  b.daiddomact LIKE :globale'
                        . ' OR  b.dalibelledomact LIKE :globale'                        
                        . ' OR  v.silibellesite LIKE :globale'
                        . ' OR  u.ilolibelleilot LIKE :globale')
                  ->setParameter('globale', '%'.$valselect['RechercheGlobale'].'%');
            }
            if($valselect['IlotText'] != '')
            {
               $qb->andwhere('u.ilocodeilot LIKE :ilottext')
                  ->setParameter('ilottext', '%'.$valselect['IlotText'].'%');
            }
            if($valselect['IlotList'] != '')
            {
               $qb->andwhere('u.ilocodeilot = :ilot')
                  ->setParameter('ilot', $valselect['IlotList']);
            }
            if($valselect['TypeIlot'] != '')
            {
               $qb->andwhere('u.tIloTiidtypeilot = :typeilot')
                  ->setParameter('typeilot', $valselect['TypeIlot']);
            }
            if($valselect['Used'] != '')
            {
               $qb->andwhere('u.tIloUsed = :use')
                  ->setParameter('use', $valselect['Used']);
            } 
            if($valselect['Competences'] != '')
            {
                $qb->andwhere('u.tIloCoidcompetence = :competence')
                ->setParameter('competence', $valselect['Competences']);
            }
            if($valselect['ServiceDem'] != '')
            {
                $qb->andwhere('u.tIloSedidservdem = :servdem')
                ->setParameter('servdem', $valselect['ServiceDem']);
            }
            if($valselect['Entreprise'] != '')
            {
                $qb->andwhere('u.tIloEnidentreprise = :entreprise')
                ->setParameter('entreprise', $valselect['Entreprise']);
            }
            if($valselect['DomaineAct'] != '')
            {
                $qb->andwhere('u.tIloDaiddomact = :domact')
                ->setParameter('domact', $valselect['DomaineAct']);
            }
            if($valselect['Optim'] != '2') // Null val par defaut, et 2 quand "les deux" est coché
            {
                $qb->andwhere('u.ilooptim = :optim')
                ->setParameter('optim', $valselect['Optim']);
            }
            if($valselect['SiteGeo'] != '')
            {
                $qb->andwhere('u.tSitesSiidsite = :site')
                ->setParameter('site', $valselect['SiteGeo']);
            }
               
            $allIlots = $qb->getQuery()->getResult();
            $nbIlots = count($allIlots);
 
            return $this->render('vaeRefGPCBundle:Ilot:IlotSearch.html.twig', array(
                'allIlots' => $allIlots,
                'nbIlots' => $nbIlots
            ));
            
//            $globalIlots = $qb->getQuery()->getResult();
// 
//            $test = $globalIlots[0]->getIlocodeilot();
//            
//            foreach ($globalIlots as $globalIlot) {
//                
//                echo $globalIlot->getIlocodeilot().' // '.$globalIlot->getTIloCoidcompetence()->getCoidcompetence().'<br/>';
//                
//            }
//            
//            exit();
            
            // Génération de la requête SQL
        
            // Récupération de la réponse de la requête
        
            // Envoi à twig 
        
            // Retour à ajax pour remplir le <div> concerné par la requête ajax 
            
           
            
        }
        else
        {
         echo 'eereur'; exit;
            // La requête envoyé n'est pas une requête ajax -> Erreur 400
           return new Response('Erreur : ce n\'est pas une requête ajax !', 400);
        }
    }
    public function ajaxIlotSearchAllAction($base, Request $request )
    {
        if ($request->isXmlHttpRequest()) {

            $categorie = 'ilot';  
            $repo = $this->getDoctrine()->getManager();
            
            $infoBases = new InfosBase($repo, $base, $categorie);
                $libelleBase = $infoBases->getLibelleBase();
                $codeBase = $infoBases->getCodeBase();
            
            // Récupération de tous les îlots
            $repositoryIlot = $repo->getRepository('vaeRefGPCBundle:TmIlots');
            $allIlots = $repositoryIlot->findByIlocodebase($codeBase);
            $nbIlots = count($allIlots);
            
            return $this->render('vaeRefGPCBundle:Ilot:IlotSearch.html.twig', array(
                'allIlots' => $allIlots,
                'nbIlots' => $nbIlots
            ));
        }
        else
        {
            // La requête envoyé n'est pas une requête ajax -> Erreur 400
            return new Response('Erreur : ce n\'est pas une requête ajax !', 400);
        }
    }
    
    
    public function indexAction($base, Request $request)
    {
        // initialisation du repository
        $repo = $this->getDoctrine()->getManager();
        
        // Gestion du menu horizontal et vertical
        $categorie = 'ilot';  
        
        $infoBases = new InfosBase($repo, $base, $categorie);
            $libelleBase = $infoBases->getLibelleBase();
            $codeBase = $infoBases->getCodeBase();
            $cssMenuHorizontal = $infoBases->getCSSMenuHorizontal();
          
            $cssMenuVertical = $infoBases->getCSSMenuVertical();
         
        // Récupération du nombre d'îlot
        $repositoryIlot = $repo->getRepository('vaeRefGPCBundle:TmIlots');
       // $repositoryCompetence = $repo->getRepository('vaeRefGPCBundle:TIloCompetences');

        $qb = $repositoryIlot->createQueryBuilder('T');
        $qb->select('COUNT(T)')
            ->where('T.ilocodebase = :codebase')
            ->setParameter('codebase', $codeBase);

        $nbIlots = $qb->getQuery()->getSingleScalarResult();
        
        
        // Création du formulaire de recherche



        // On crée le FormBuilder grâce au service form factory
        //$formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $ilot);
        //$form   = $this->get('form.factory')->create(AdvertType::class, $advert);
        
   

        
        
    
    
    /////////
    // UPDATE TM_Ilots INNER JOIN t_ilo_bandeau ON TM_Ilots.t_ilo_banIdBandeau 
    // = t_ilo_bandeau.banIdBandeau SET TM_Ilots.t_ilo_banIdBandeau = t_ilo_bandeau.banId 
    /////////
    
    //UPDATE TM_Ilots INNER JOIN t_ilo_competences ON TM_Ilots.`t_ilo_coIdCompetence` = t_ilo_competences.coIdCompetence SET TM_Ilots.`t_ilo_coIdCompetence` = t_ilo_competences.coIdCompetence
    
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
   
        

    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
    // À partir du formBuilder, on génère le formulaire

    
  /*  $option = '';
$testform = new \vae\RefGPCBundle\Form\TIloCompetencesType();
$testselect = $testform->buildForm($formBuilder, $option);
   
   */
        
//$formBuildertest = $this->get('form.factory')->createBuilder();
//
//        $formBuilders = new searchForm();
//        $formBuilder = $formBuilders->createForm($formBuildertest, $codeBase, 'ilot');
//     
//        print_r($formBuilder);
//        //exit();
//        
// $form = $formBuilder->getForm();

 
    
    
    //$ilot = new TmIlots();
        //$competence = new TIloCompetences();
    //AdvertType::class
    $form = $this->createForm(searchIlotForm::class, array('data'=>$codeBase));

 
 
// Récupération de tous les îlots
//$allIlots = $repositoryIlot->findAll();
 
 
// Récupération des îlots avec des critères de recherche fait à la main
// $allIlots = $repositoryIlot->findBy(
//  array('ilocodebase' => 'T1', 'tIloCoidcompetence' => '14'), // Critere
//  array('ilocodeilot' => 'DESC'),        // Tri
//  10,                              // Limite
//  0                               // Offset
//);
 
 
 // Récupération de la recherche globale avec le LIKE
//    $qb = $repositoryIlot->createQueryBuilder('u');
//   
//     $qb->where('u.ilocodeilot LIKE :search')
//        ->setParameter('search', '%RL%');
//    
//    $globalIlots = $qb->getQuery()
//                     ->getResult();
// 
        
 
 
            
            

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
        
        return $this->render('vaeRefGPCBundle:Ilot:Ilot.html.twig', array(
        'nbIlots' => $nbIlots,
        'cssMenuHorizontal' => $cssMenuHorizontal,
        'cssMenuVertical' => $cssMenuVertical, 
        'libelleBase' => $libelleBase,
        'codeBase' => $codeBase,
        'base' => $base,
        'form' => $form->createView(),
        //'newIlot' => $ilot,
        //'allIlots' => $globalIlots,
        ));
        
        
        
        
        
        
        /*
        $var2 = 'autre';
        $var1 = 'test';
        
        $idcompte = 1;
        
        
        $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('vaeRefGPCBundle:TComptes');


    // On récupère l'entité correspondante à l'id $id

    $advert = $repository->find($idcompte);

    $var1 = $advert->getEmailcompte();
    //echo $advert->getNomcompte();

    // $advert est donc une instance de OC\PlatformBundle\Entity\Advert

    // ou null si l'id $id  n'existe pas, d'où ce if :

    if (null === $advert) {

      throw new NotFoundHttpException("L'annonce d'id ".$idcompte." n'existe pas.");

    }

    //var_dump($advert);
    //print_r($advert);

    // Le render ne change pas, on passait avant un tableau, maintenant un objet

      // replace this example code with whatever you need
        return $this->render('vaeRefGPCBundle:Ilot:Ilot.html.twig', array(
        'var1' => $var1,
        'var2' => $var2,
        ));

   */
        
        
        
  
        
    }
}
