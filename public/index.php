<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Router;

require 'routes.php';


$router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if($match){
    if(is_callable($match['action'])){
        call_user_func($match['action']);
    } else if (is_array($match['action'])){
        $class = $match['action'][0];
        $controller = new $class();
        $method = $match['action'][1];
        $controller->$method();
    }
} else {
    echo 404;
}

// var_dump($router);
