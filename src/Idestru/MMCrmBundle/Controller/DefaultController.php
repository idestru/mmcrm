<?php

namespace Idestru\MMCrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MMCrmBundle:Default:index.html.twig', array('name' => $name));
    }
}
