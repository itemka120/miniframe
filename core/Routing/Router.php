<?php

namespace core\Routing;

class Router
{
    private array $routes = [];

    public function addRoute(Route $route): void
    {
        $this->routes[] = $route;
    }

    public function dispatch(): void
    {
        $uri = $_SERVER['REQUEST_URI'];

        foreach ($this->routes as $route) {
            if ($route->uri === $uri) {
                $controllerName = 'app\\Controllers\\' . $route->controller;
                $action = $route->action;

                $controller = new $controllerName();
                $controller->$action();
                return;
            }
        }

        echo "404 Not Found";
    }

}