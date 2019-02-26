<?php

namespace IpepsWapi\DoctrineTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@IpepsWapiDoctrineTest/Default/index.html.twig');
    }
}
