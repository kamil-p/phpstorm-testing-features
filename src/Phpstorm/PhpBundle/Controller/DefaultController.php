<?php

namespace Phpstorm\PhpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PhpstormPhpBundle:Default:index.html.twig', array('name' => $name));
    }
}
