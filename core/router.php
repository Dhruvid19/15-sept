<?php

class Router
{
    public $routes = [

        'GET' => [],
        'POST' => []

    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }


   

    public function post($uri, $controller)
    {
       
        $this->routes['POST'][$uri] = $controller;
    }





    public function direct($uri, $_RequestType)
    {
        if(array_key_exists($uri, $this->routes[$_RequestType])) {
            return $this->routes[$_RequestType][$uri];
        }

        throw new Exception('No route defined for this URI');

    }
}