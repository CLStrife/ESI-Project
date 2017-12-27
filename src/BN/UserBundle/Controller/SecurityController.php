<?php

namespace BN\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
* 
*/
class SecurityController extends Controller
{
	
	public function loginAction(Request $request)
	{
		if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
			{
				return $this->redirectToRoute('bn_platform_homepage');
			}
			$authenticationUtils = $this->get('security.authentication_utils');

			return $this->render('BNUserBundle:Security:login.html.twig', array(

				'last_username' => $authenticationUtils->getLastUsername(),
				'error' 		=> $authenticationUtils->getLastAuthenticationError(),
			));
	
	}
}