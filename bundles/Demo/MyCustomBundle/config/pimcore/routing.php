<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('my_custom_homepage', new Route('/my_custom', array(
    '_controller' => 'MyCustomBundle\Controller\DefaultController:indexAction',
)));

return $collection;
