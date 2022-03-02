<?php
class Router
{
    protected $routes = [
        "GET" => [],
        "POST" => []
    ];
    public static function load($fileName)
    {
        $router = new Router;
        require $fileName;
        return $router;
    }
    public function register($routes)
    {
        $this->routes = $routes;
    }
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    public function direct($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            $explodedArr = explode("@", $this->routes[$method][$uri]);
            $this->callMethod($explodedArr[0], $explodedArr[1]);
            // return $this->routes[$method][$uri];
        } else {
            die("404 page");
        }
    }
    public function callMethod($class, $method)
    {
        $obj = new $class;
        $obj->$method();
    }
}
