<?php

namespace BN\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BN\PlatformBundle\Entity\Advert;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use BN\ForumBundle\Entity\forum_topic;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //return $this->render('BNForumBundle:Default:index.html.twig');
        $repository = $this 
        -> getDoctrine()
        -> getManager()
        -> getRepository('BNPlatformBundle:Advert')
        ;
        $listAdverts = $repository->findAll();
        
        return $this->render('BNForumBundle:forum:testforum.html.twig', array('listAdverts' => $listAdverts
    ));
        //declarer 'listadverts' => $listAdvert pour qu'il soit compris par twig
    }
    public function addTopicAction(Request $request)
    {
        $topic = new forum_topic;
        $form = $this->get('form.factory')->createBuilder(FormType::class, $topic)
        
        ->add('topicTitre', TextType::class)
        ->add('topicGenre', TextType::class)
        ->add('topicPost', TextareaType::class)
        ->add('save', SubmitType::class)
        ->getForm()
        ;
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($topic);
                $em->flush(); 
            }
             $request->getSession()->getFlashBag()->add('notice', 'Topic créé!');
        }

        return $this->render('BNForumBundle:Forum:createTopic.html.twig', array('form' => $form->createView(),
    ));

    }
}
