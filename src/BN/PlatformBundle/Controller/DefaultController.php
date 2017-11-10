<?php

namespace BN\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BNPlatformBundle:Default:index.html.twig');
    }
}
