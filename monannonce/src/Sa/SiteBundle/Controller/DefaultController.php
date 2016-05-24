<?php

namespace Sa\SiteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}", name="site.index")
     * @Template()
     */
    public function indexAction($name)
    {
       return array('name' => $name);
    }
    
    /**
     * @Route("/accueil/", name="site.accueil")
     * @Template()
     */
    public function accueilAction()
    {

        $em = $this->getDoctrine()->getManager();
        
        $annonces = $em->getRepository('SaSiteBundle:Annonce')->findBy(array(), array('id' => 'DESC')); 
        $annoncesPhoto = $em->getRepository('SaSiteBundle:AnnoncePhoto')->findAll();
        $user = $em->getRepository('SaSiteBundle:User')->findAll();
        $annonceType = $em->getRepository('SaSiteBundle:AnnonceType')->findAll();

        //echo($annoncesPhoto[0]->getId());
        //die();
        
        //array_push($annonces, "photo", $annoncesPhoto);
        
        return array("annonces" => $annonces, "annoncePhotos" => $annoncesPhoto, "users" => $user, "typeAnnonces" => $annonceType );

    }

    
     /**
     * @Template()
     */
    public function verifieConnexionAction()
    {   
        /* VERIFIE SI LE ROLE N'EST PAS EGALE A ROLE_ADMIN ou ROLE_USER*/
        if ( (true === $this->get('security.context')->isGranted('ROLE_USER')) || (true === $this->get('security.context')->isGranted('ROLE_ADMIN')) ) {

            // on recupere l'id de l'utilisateur
            
            $user = $this->get('security.context')->getToken()->getUser();
            $id = $user->getId();

            $em = $this->getDoctrine()->getManager();

            $users = $em->getRepository('SaSiteBundle:User')->findById($id); 
 
            return $this->render('SaSiteBundle:Default:menu.html.twig', array("connecte" => 1, "users" => $users ));
            
        }else{
            
            return $this->render('SaSiteBundle:Default:menu.html.twig', array("connecte" => 0 ));

        }

    }
    
    
    /**
     * @Route("/securite/profil/", name="site.profil")
     * @Template()
     */
    public function profilAction()
    {

        $em = $this->getDoctrine()->getManager();
        
        $annonces = $em->getRepository('SaSiteBundle:Annonce')->findBy(array(), array('id' => 'DESC')); 
        $annoncesPhoto = $em->getRepository('SaSiteBundle:AnnoncePhoto')->findAll();
        $users = $em->getRepository('SaSiteBundle:User')->findAll();
        $annonceType = $em->getRepository('SaSiteBundle:AnnonceType')->findAll();
        
        $user = $this->get('security.context')->getToken()->getUser();
        $id = $user->getId();
        
        $profils = $em->getRepository('SaSiteBundle:User')->findById($id);

        //echo($annoncesPhoto[0]->getId());
        //die();
        
        //array_push($annonces, "photo", $annoncesPhoto);
        
        return array("annonces" => $annonces, "annoncePhotos" => $annoncesPhoto, "users" => $users, "typeAnnonces" => $annonceType, "profils" => $profils );

    }
    

}
