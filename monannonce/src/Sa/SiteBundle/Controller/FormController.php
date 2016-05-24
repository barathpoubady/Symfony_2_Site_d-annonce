<?php

namespace Sa\SiteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class FormController extends Controller
{
     /**
     * @Route("/login", name="site.login")
     * @Template()
     */
     public function loginAction(Request $request)
    {
	$session = $request->getSession();

	if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
		$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
	} else {
		$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
		$session->remove(SecurityContext::AUTHENTICATION_ERROR);
	}

	$params = array(
		"last_username" => $session->get(SecurityContext::LAST_USERNAME),
		"error"         => $error,
	);

	return $params;
    }
    

    /**
     * @Route("/login_check", name="site.login_check")
     * 
     */
     public function loginCheckAction()
    {

         return array();

    }
    
    /**
     * @Route("/logout", name="site.logout")
     * @Template()
     */
     public function logoutAction()
    { 
         return array();
    }

    
}
