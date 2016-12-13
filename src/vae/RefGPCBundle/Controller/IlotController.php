<?php

namespace vae\RefGPCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use vae\RefGPCBundle\usrClass\InfosBase;
use vae\RefGPCBundle\Entity\TmIlots;
use vae\RefGPCBundle\Entity\TIloCompetences;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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

    public function ajaxIlotRechercheAction( Request $request )
    {
        if ($request->isXmlHttpRequest()) {
        
            
            $valselect = $request->request->get('form');
            
            // récupération des données formulaire
          
          
            // Génération de la requête SQL
        
            // Récupération de la réponse de la requête
        
            // Envoi à twig 
        
            // Retour à ajax pour remplir le <div> concerné par la requête ajax 
            
            return new Response($valselect['TestCompetences']);
            
        }
        else
        {
         echo 'eereur'; exit;
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
        $repositoryCompetence = $repo->getRepository('vaeRefGPCBundle:TIloCompetences');

        $qb = $repositoryIlot->createQueryBuilder('T');
        $qb->select('COUNT(T)')
            ->where('T.ilocodebase = :codebase')
            ->setParameter('codebase', $codeBase);

        $nbIlots = $qb->getQuery()->getSingleScalarResult();
        
        
        // Création du formulaire de recherche



        // On crée le FormBuilder grâce au service form factory
        //$formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $ilot);
        //$form   = $this->get('form.factory')->create(AdvertType::class, $advert);
        
   

        $ilot = new TmIlots();
        $competence = new TIloCompetences();
        
    $formBuilder = $this->get('form.factory')->createBuilder();
    
    
    
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $formBuilder
    ->add('RechercheGlobale', TextType::class, array(
        'label' => 'Recherche Globale',
    ))
    ->add('IlotText', TextType::class, array(
        'attr'=> array('maxlength' => 3, 'size' => 3),
        
    ))
    ->add('IlotList', EntityType::class, array(
        'class'=>'vaeRefGPCBundle:TmIlots',  
        'placeholder'=> 'Tous',
        'query_builder'=> function ($TmIlots) use ($codeBase)
    {
         return $TmIlots->createQueryBuilder('a')
            ->where('a.ilocodebase = :codebase')
            ->setParameter('codebase', $codeBase);
    },
        'choice_label'=>function ($TmIlots) {
            return $TmIlots->getFormCodeIlotETLibelle();
        },
        'choice_value' => 'iloCodeIlot',
    )) 
     ->add('TypeIlot', EntityType::class, array(
        'class'=>'vaeRefGPCBundle:TIloTypeilot',  
        'placeholder'=> 'Tous',
        'choice_label'=> 'tiidtypeilot',
        'choice_value' => 'tiidtypeilot',
    ))
     ->add('Used', EntityType::class, array(
        'class'=>'vaeRefGPCBundle:TIloUsed',  
        'placeholder'=> 'Tous',
        'choice_label'=> 'uidused',
        'choice_value' => 'uidused',
    ))    
    ->add('Competences', EntityType::class, array(
        'class'=>'vaeRefGPCBundle:TIloCompetences',  
        'placeholder'=> 'Tous',
        'query_builder'=> function ($TIloCompetences) use ($codeBase)
    {
         return $TIloCompetences->createQueryBuilder('a')
            ->where('a.cocodebase = :codebase')
            ->setParameter('codebase', $codeBase);
    },
        'choice_label'=>'coIdCompetence',
        'choice_value' => 'coIdCompetence',
    ))     
    ->add('ServiceDem', EntityType::class, array(
        'class'=>'vaeRefGPCBundle:TIloServicedemandeur',  
        'placeholder'=> 'Tous',
        'query_builder'=> function ($TIloServicedemandeur) use ($codeBase)
    {
         return $TIloServicedemandeur->createQueryBuilder('a')
            ->where('a.sedcodebase = :codebase')
            ->setParameter('codebase', $codeBase);
    },
        'choice_label'=>'sedidservdem',
        'choice_value' => 'sedidservdem',
    ))         
    ->add('Entreprise', EntityType::class, array(
        'class'=>'vaeRefGPCBundle:TIloEntreprise',  
        'placeholder'=> 'Tous',
        'query_builder'=> function ($TIloEntreprise) use ($codeBase)
    {
         return $TIloEntreprise->createQueryBuilder('a')
            ->where('a.encodebase = :codebase')
            ->setParameter('codebase', $codeBase);
    },
        'choice_label'=>function ($TIloEntreprise) {
            return $TIloEntreprise->getFormLibelleEntrepriseETId();
        },
        'choice_value' => 'enidentreprise',
    ))
    //Site Géographique ...            
    ->add('SiteGeo', EntityType::class, array(
        'class'=>'vaeRefGPCBundle:TSites',  
        'placeholder'=> 'Tous',
        'query_builder'=> function ($TSites) use ($codeBase)
    {
         return $TSites->createQueryBuilder('a')
            ->where('a.sicodebase = :codebase')
            ->setParameter('codebase', $codeBase);
    },
        'choice_label'=> 'silibellesite',
        'choice_value' => 'siidsite',
    ))                 
    ->add('DomaineAct', EntityType::class, array(
        'class'=>'vaeRefGPCBundle:TIloDomaineactivite',  
        'placeholder'=> 'Tous',
        'query_builder'=> function ($TIloDomaineactivite) use ($codeBase)
    {
         return $TIloDomaineactivite->createQueryBuilder('a')
            ->where('a.dacodebase = :codebase')
            ->setParameter('codebase', $codeBase);
    },
        'choice_label'=>function ($TIloDomaineactivite) {
            return $TIloDomaineactivite->getFormLibelleDomActETId();
        },
        'choice_value' => 'daiddomact',
    ))    
     
    // Bouton radio pour Optim / oui-non-les deux
    ->add('Optima', ChoiceType::class, array(
    'label'    => 'Optim ?',
    'choices' => array(
        'Oui' => 1,
        'non' => 0,
        'Les deux' => null),
    'required' => false, 
    'placeholder' => false,
    'expanded' => true,
    'multiple' => false,
    ))            
                 
                
            
        /*->add('save',      SubmitType::class)*/
    ;

    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
    // À partir du formBuilder, on génère le formulaire

    
  /*  $option = '';
$testform = new \vae\RefGPCBundle\Form\TIloCompetencesType();
$testselect = $testform->buildForm($formBuilder, $option);
   
   */

 $form = $formBuilder->getForm();

 
 

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
        'newIlot' => $ilot
        
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
