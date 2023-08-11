<?php

namespace core\Routing;

class Route {

    /**
     * The URI pattern the route responds to.
     *
     * @var string
     */
    public string $uri;

    /**
     * The route action array.
     *
     * @var string
     */
    public string $action;

    /**
    * The controller instance.
    *
    * @var mixed
     */
    public string $controller;

    /**
     * Create a new Route instance.
     *
     * @param string $uri
     * @param string $action
     * @param  string $controller
     * @return void
     */
    public function __construct(string $uri, string $controller, string $action)
    {
        $this->uri = $uri;
        $this->controller = $controller;
        $this->action = $action;
    }

}