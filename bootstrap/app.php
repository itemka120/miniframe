<?php

use core\Routing\Router;

$routes = include '../routes/web.php';

$router = new Router();

foreach ($routes as $route) {
    $router->addRoute($route);
}

$router->dispatch();