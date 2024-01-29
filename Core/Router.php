<?php

class Router{
    protected $routes = [];

    public function __construct($routes) {
        $this->routes = $routes;
    }

    public function direct($uri){
        if($uri === ''){
            return require("./Src/Views/home.view.php");
        }
    }
}

$route = new Router([]);