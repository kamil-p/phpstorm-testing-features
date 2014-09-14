<?php

namespace Phpstorm\XmlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PhpstormXmlBundle:Default:index.html.twig', array('name' => $name));
    }
}
