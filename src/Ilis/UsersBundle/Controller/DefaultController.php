<?php

namespace Ilis\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IlisUsersBundle:Default:index.html.twig', array('name' => $name));
    }
}
