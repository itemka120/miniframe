<?php

use core\Routing\Route;

return $routes = [
    new Route('/', 'HomeController', 'index'),
    new Route('/about', 'HomeController', 'about'),
    new Route('/about/company', 'HomeController', 'company'),
];