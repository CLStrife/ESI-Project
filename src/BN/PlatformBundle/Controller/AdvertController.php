<?php

namespace BN\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use BN\PlatformBundle\Entity\Advert;
use Symfony\Component\HttpFoundation\Request;

/**
* 
*/
class AdvertController extends Controller
{
	
	public function connexionAction(Request $request)		
	{
		
		$advert = new Advert;
		$advert->setDateInscript(new \Datetime());

		$form = $this->get('form.factory')->createBuilder(FormType::class, $advert)

		->add('dateInscript',			DateType::class)
		->add('nom',					TextType::class)
		->add('prenom',					TextType::class)
		->add('pseudo', 				TextType::class)
		->add('mail',					TextType::class)
		->add('password',				PasswordType::class)
		->add('save',					SubmitType::class)
		->getForm()
		;

		if($request->isMethod('POST')) {

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {

			$em = $this->getDoctrine()->getManager();
			$em -> persist($advert);
			$em -> flush();

			return $this->redirectToRoute('bn_confirm');
		}
	}
		return $this->render('BNPlatformBundle:Advert:connexion.html.twig', array('form' => $form->createView(),
	));
	}

	public function validAction()
	{
			return $this->render('BNPlatformBundle:Advert:confirmRegistrated.html.twig');
		
	}

}