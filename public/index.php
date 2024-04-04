<?php

spl_autoload_register(function ($class){
    $class = substr($class, 4);
    $class = str_replace('\\', '/', $class);
    require_once "src/$class.php";
});

use App\Router;

require 'routes.php';


$router = new Router($_SERVER['REQUEST_URI']);
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
