<?php

namespace Sa\SiteBundle\Controller;

use DateTime;
use Sa\SiteBundle\Entity\Annonce;
use Sa\SiteBundle\Entity\AnnoncePhoto;
use Sa\SiteBundle\Entity\AnnonceUser;
use Sa\SiteBundle\Entity\MessageAnnonce;
use Sa\SiteBundle\Entity\MessageUser;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AnnonceController extends Controller {

    /**
     * @Route("/securite/message_user/{id_annonce}", name = "site.messageAnnonce")
     * @Template()
     */
    public function messageAnnonceAction($id_annonce, Request $request) {
        
       
        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.context')->getToken()->getUser();
        
        $annonce = $em->getRepository('SaSiteBundle:Annonce')->findById($id_annonce); 
        
        $users = $em->getRepository('SaSiteBundle:User')->findAll();
        
        $userDestinataire;

        
        foreach($users as $k => $v) {

           // print_r($users[$k]->getId());

            if($users[$k] == $annonce[0]->getUser()){ // && $annonce[0]->getId() == $id_annonce

               $userDestinataire = $users[$k];
               break; 
            }else{

                $userDestinataire = null;
                
            }
            
        }
//die();
        
        $messageUser = new MessageUser();
        $messageUser->setUser($user);
        $messageUser->setUserDestinataire($userDestinataire);
        $messageUser->setCreated(new DateTime('now'));
        $messageUser->setUpdated(new DateTime('now'));
        
        //$defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($messageUser)
                ->setAction($this->generateUrl('site.messageAnnonce', array('id_annonce' => $id_annonce)))
                ->setMethod('POST')
                ->add('message', 'textarea',  array(
                    'label' => 'Votre message ',
                ))
                ->add('envoyer', 'submit')
                ->getForm();
        
        $form->handleRequest($request);

  
        if ($form->isValid()) {

            // $data = $form->getData();

            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em->persist($messageUser);
            $em->flush();

            //Message Flash
            $this->get('session')->getFlashBag()->add(
                    'notice2', 'Votre message est envoyé avec succès !!'
            );

            return $this->redirect($this->generateUrl('site.messageAnnonce', array('id_annonce' => $id_annonce)));
            
        }
        
        return $this->render('SaSiteBundle:Annonce:messageAnnonce.html.twig', array(
                    'id_annonce' => $id_annonce,
                    'form' => $form->createView(),
                    )
        );
       
    }
    
    /**
     * @Route("/annonce/{id_annonce}", name = "site.annonce")
     * @Template()
     */
    public function afficheAnnonceAction($id_annonce) {

        $em = $this->getDoctrine()->getManager();
        
        $annonces = $em->getRepository('SaSiteBundle:Annonce')->findById($id_annonce); 
        $annoncesPhoto = $em->getRepository('SaSiteBundle:AnnoncePhoto')->findAll();
        $user = $em->getRepository('SaSiteBundle:User')->findAll();
        $annonceType = $em->getRepository('SaSiteBundle:AnnonceType')->findAll();

        return array("annonces" => $annonces, "annoncePhotos" => $annoncesPhoto, "users" => $user, "typeAnnonces" => $annonceType );

    }
    
     /**
     * @Route("/securite/participe/{id_annonce}", name = "site.participe")
     * 
     */
    public function participeAction($id_annonce)
    {
        
        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.context')->getToken()->getUser();
        $annonce = $em->getRepository('SaSiteBundle:Annonce')->findById($id_annonce);
        $annonceMessageTest = $em->getRepository('SaSiteBundle:MessageAnnonce')->findAll();

        /* Si egale a zero alors user na jamais participé sinon oui */
        $testParticipe = 0;
        
            foreach($annonceMessageTest as $k => $v) {

                if($v->getUser() == $user && $annonce[0] == $v->getAnnonce()){

                   // echo 'okokoko';
                   $testParticipe = 1;
                }else{

                }
            
         }

       // echo $annonceMessageTest[0]->getUser();
       
        //die();
        
        if($testParticipe == 1){

           $this->get('session')->getFlashBag()->add(
                'notice',
                'Vous êtes déjà inscrit à cette annonce!'
             );

        }else{
            
           // print_r($id_annonce);
           // die();

            $messageAnnonce = new MessageAnnonce();
            $messageAnnonce->setAnnonce($annonce[0]);
            $messageAnnonce->setUser($user);
            $messageAnnonce->setMessage("L'utilisateur ".$user->getNom().' '.$user->getPrenom().' participe a cette événement');
            $messageAnnonce->setCreated(new DateTime('now'));
            $messageAnnonce->setUpdated(new DateTime('now'));

            /* Appel de lentity manage */

            $em->persist($messageAnnonce);
            $em->flush();

            // return new Response('Id du produit créé : '.$produit->getId());

             $this->get('session')->getFlashBag()->add(
                'notice',
                'Vous êtes inscrit à cette annonce!'
             );

        }
         
         return $this->redirect($this->generateUrl('site.annonce', array('id_annonce' => $id_annonce)));//, 301
        
         
         //return $this->render('SaSiteBundle:Annonce:afficheAnnonce.html.twig', array('nbr_articles' => $nbrArticles));
    }
    
     /**
     * @Route("/securite/liste/", name = "site.liste_annonce")
     * @Template()
     */
    public function listeAnnonceAction()
    {
        
        $user = $this->get('security.context')->getToken()->getUser();
        $id = $user->getId();
        
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('SaSiteBundle:User')->findById($id);
        
        $annonces = $em->getRepository('SaSiteBundle:Annonce')->findAll();

        return array("annonces" => $annonces, "users" => $users );
        
    }
    
    
    
    /**
     * @Route("/securite/ajoute_annonce/", name = "site.annonce_ajoute")
     * @Template()
     */
    public function ajouteAnnonceAction(Request $request) {
        
        
        $em = $this->getDoctrine()->getManager();

        $user = $this->get('security.context')->getToken()->getUser();
        //$id = $user->getId();
        // crée une tâche et lui donne quelques données par défaut pour cet exemple
        $annonce = new Annonce();
        $annonce->setCreated(new DateTime('now'));
        $annonce->setUpdated(new DateTime('now'));
        $annonce->setUser($user);

        $annonce_user = new AnnonceUser();
        $annonce_user->setUser($user);
        $annonce_user->setAnnonce($annonce);

        $annoncePhoto = new AnnoncePhoto();
        $annoncePhoto->setAnnonce($annonce);

        $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
                ->setAction($this->generateUrl('site.annonce_ajoute'))
                ->setMethod('POST')
                ->add('titre', 'text')
                ->add('description', 'text')
                ->add('adresse', 'text')
                ->add('ville', 'text')
                ->add('cp', 'text',  array(
                    'label' => 'code postal',
                ))
                ->add('photo', 'file')
                ->add('nombre_de_place', 'integer')
                ->add('annonce_type', 'entity', array(
                    'class' => 'SaSiteBundle:AnnonceType',
                    'property' => 'nom',
                ))
                ->add('date_debut', 'date', array(
                    'input' => 'datetime',
                    'widget' => 'choice',
                ))
                ->add('date_fin', 'date', array(
                    'input' => 'datetime',
                    'widget' => 'choice',
                ))
                ->add('enregistrer', 'submit')
                ->getForm();

        $form->handleRequest($request);


        if ($form->isValid()) {

            $data = $form->getData();

            //echo($annonce->getId());
            //die();
            
            // $pathName = $annonce
            //die($data['photo']->getClientOriginalName());
            //echo($data['photo']->getPath());

            $annonce->setAnnonceType($data['annonce_type']);
            $annonce->setTitre($data['titre']);
            $annonce->setDescription($data['description']);
            $annonce->setNbrPlace($data['nombre_de_place']);
            $annonce->setAdresse($data['adresse']);
            $annonce->setVille($data['ville']);
            $annonce->setCp($data['cp']);
            $annonce->setDateDebut($data['date_debut']);
            $annonce->setDateFin($data['date_fin']);

            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $em->persist($annonce);
            $em->flush();

            $data['photo']->move(
                    $this->get('kernel')->getRootDir() . '/../web/upload/'.$annonce->getId(), 
                    $data['photo']->getClientOriginalName()
            );
            $annoncePhoto->setFilePhoto('upload/'.$annonce->getId().'/'.$data['photo']->getClientOriginalName());
            
            $em->persist($annonce_user);
            $em->persist($annoncePhoto);

            $em->flush();

            $this->get('session')->getFlashBag()->add(
                    'notice3', 'Vos changements ont été sauvegardés! (3)'
            );

            return $this->redirect($this->generateUrl('site.accueil'));
        }

        return $this->render('SaSiteBundle:Annonce:ajouteAnnonce.html.twig', array(
                    'form' => $form->createView(),
        ));

        //return array();
    }

}
