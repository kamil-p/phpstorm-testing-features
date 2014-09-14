<?php

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;



$container->setDefinition(
    'phpstorm.php_service',
    new Definition(
        'Phpstorm\PhpBundle\Service\PhpService',
        array(
            new Reference('translator'),
        )
    )
);

