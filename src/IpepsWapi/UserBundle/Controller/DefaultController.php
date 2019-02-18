<?php

namespace IpepsWapi\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/users")
     */
    public function indexAction()
    {
        $userList= $this->container->get('userDao');
        return $this->render('@IpepsWapiUser/Default/index.html.twig');
    }


}
