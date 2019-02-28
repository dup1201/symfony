<?php
/**
 * Created by PhpStorm.
 * User: Yoram
 * Date: 26/02/2019
 * Time: 17:09
 */

namespace IpepsWapi\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends Controller
{
    /**
     * @Route("/userDetail/{id}", name="userDetail")
     *
     */
    public function userDetailAction($id)
    {
        $user= $this->container->get('userDao');
        $userList=$user->findById($id);
        return $this->render('@IpepsWapiUser/Default/userDetail.html.twig',compact('userList'));
    }
}