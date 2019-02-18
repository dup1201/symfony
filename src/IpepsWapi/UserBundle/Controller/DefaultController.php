<?php

namespace IpepsWapi\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use IpepsWapi\UserBundle\Dao\UserDao;


class DefaultController extends Controller
{
    /**
     * @Route("/users", name="users")
     */
    public function indexAction()
    {
        $user= $this->container->get('userDao');
        $userList=$user->findAll();
        return $this->render('@IpepsWapiUser/Default/index.html.twig');
    }


}
