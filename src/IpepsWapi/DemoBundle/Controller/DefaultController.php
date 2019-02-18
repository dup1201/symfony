<?php

namespace IpepsWapi\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/hello")
     */
    public function indexAction()
    {
        return $this->render('@IpepsWapiDemo/Default/index.html.twig');
    }
}
