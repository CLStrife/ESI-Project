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

/**
* 
*/
class AdvertController extends Controller
{
	
	public function connexionAction()		
	{
		/*$content = $this->get('templating')->render('BNPlatformBundle:Advert:connexion.html.twig');
		return new Response($content);
		*/
		$advert = new Advert;
		$advert->setDateInscript(new \Datetime());

		$formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $advert);

		$formBuilder	
		->add('dateInscript',			DateType::class)
		->add('nom',					TextType::class)
		->add('prenom',					TextType::class)
		->add('pseudo', 				TextType::class)
		->add('mail',					TextType::class)
		->add('password',				PasswordType::class)
		->add('save',					SubmitType::class)
		;
		$form = $formBuilder->getForm();

		return $this->render('BNPlatformBundle:Advert:connexion.html.twig', array('form' => $form->createView(),
	));
	}

	public function validAction()
	{
		$advert = new Advert;

		$validator = $this->get('validator');
		$listError = $validator->validate($advert);

		if (count($listError) > 0) {
			return new Response((string) $listError);
		}else{
			//return new Response("Tu es enregistré!!");
			return $this->redirectToRoute('task_success');
		}
	}

}