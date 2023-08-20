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
        $uri = $this->cleanUri($_SERVER['REQUEST_URI']);

        foreach ($this->routes as $route) {
            if ($route->uri === $uri) {
                $controllerName = 'app\\Controllers\\' . $route->controller;
                $action = $route->action;

                if (class_exists($controllerName)) {
                    $controller = new $controllerName();

                    if (method_exists($controller, $action)) {
                        $controller->$action();
                        return;
                    }
                }
            }
        }

        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
    }

    private function cleanUri(string $uri): string
    {
        return trim(parse_url($uri, PHP_URL_PATH), '/');
    }

}