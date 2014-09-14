<?php

namespace Phpstorm\YmlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PhpstormYmlBundle:Default:index.html.twig', array('name' => $name));
    }
}
