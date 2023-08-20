<?php

use core\Routing\Route;

return $routes = [
    new Route('', 'HomeController', 'index'),
    new Route('contact', 'HomeController', 'contact'),
];