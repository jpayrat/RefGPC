<?php

namespace vae\RefGPCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use vae\RefGPCBundle\usrClass\InfosBase;
use vae\RefGPCBundle\Entity\TmIlots;
use vae\RefGPCBundle\Entity\TIloCompetences;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Description of Ilot
 *
 * @author julien
 */

class IlotController extends Controller {
    //put your code here

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
        $qb->select('COUNT(T)');

        $nbIlots = $qb->getQuery()->getSingleScalarResult();
        
        
        // Création du formulaire de recherche



        // On crée le FormBuilder grâce au service form factory
        //$formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $ilot);
        //$form   = $this->get('form.factory')->create(AdvertType::class, $advert);
        
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($ilot);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

        //return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }


        $ilot = new TmIlots();
        $competence = new TIloCompetences();
        
    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, array($ilot, $competence));
    
    
    
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $formBuilder
      ->add('iloCodeIlot',     TextType::class)
      ->add('tIloEntrepriseEnidentreprise',   TextareaType::class)
      ->add('tIloUsedUidused',    CheckboxType::class)
      ->add('ilolibelleilot', RadioType::class)
      ->add('iloCodeIlot', ChoiceType::class, [
    'choices' => [
        
        //$newCompetence = new TIloCompetences(),
        $ilot = $repositoryIlot->findBy(array('ilocodebase' => $codeBase)),
        //$competence = $repositoryCompetence->findBy(array('cocodebase' => $codeBase)),
        
    ],
    'choice_label' => function($ilot) {
        return strtoupper($ilot->getIlocodeilot());
        //return strtoupper($competence->getColibellecompetence());  
    },
    'choice_attr' => function($ilot) {
        return ['class' => 'ilot_'.strtolower($ilot->getIlocodeilot())];
        //return ['class' => 'competence_'.strtolower($competence->getCoidcompetence())];
    }
        ])  
          ->add('coIdCompetence', ChoiceType::class, [
    'choices' => [
        
        $competence = $repositoryCompetence->findBy(array('cocodebase' => $codeBase)),
        
    ],
    'choice_label' => function($competence) {
        return strtoupper($competence->getColibellecompetence());  
    },
    'choice_attr' => function($comptence) {
        return ['class' => 'competence_'.strtolower($competence->getCoidcompetence())];
    }
        ]) 
      ->add('save',      SubmitType::class)
    ;

    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
    // À partir du formBuilder, on génère le formulaire

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
