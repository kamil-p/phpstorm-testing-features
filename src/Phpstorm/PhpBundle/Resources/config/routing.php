<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('phpstorm_php_homepage', new Route('/hello/{name}', array(
    '_controller' => 'PhpstormPhpBundle:Default:index',
)));

return $collection;
