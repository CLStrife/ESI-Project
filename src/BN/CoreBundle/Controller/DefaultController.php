<?php

namespace BN\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BNCoreBundle:Default:index.html.twig');
    }
}
