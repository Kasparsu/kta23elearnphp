<?php
//var_dump($_SERVER);
// require_once 'src/Router.php';
// require_once 'src/DB.php';
// require_once 'src/controllers/PublicController.php';
spl_autoload_register(function ($class){
    $class = substr($class, 4);
    $class = str_replace('\\', '/', $class);
    require_once "src/$class.php";
});

use App\Controllers\PublicController as PC;

$router = new App\Router();
var_dump($router);
$db = new App\DB();
var_dump($db);
$controller = new PC();
var_dump($controller);
$controller = new PC();
var_dump($controller);
$controller = new PC();