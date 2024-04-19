<?php 
namespace App\Controllers;

class PublicController {
    public const DAY = 60*60*24; 
    public function index(){
        //setcookie('mycookie', 'delicious', time()+self::DAY*30);
        //var_dump($_COOKIE);
        session_start(['cookie_httponly' => true]);
        //$_SESSION['secret'] = 'shh';
        dump($_SERVER);
        $name = htmlspecialchars($_GET['name']) ?? 'Nameless';        
        $fruits = ['Apple', 'Banana', 'Cherry', 'Pear'];
        include 'views/index.php';
    }
    
    public function page1(){
        session_start();
        //$_SESSION['secret'] = 'shh';
        var_dump($_SESSION);
        include 'views/page1.php';
    }
    
    public function page2(){
        include 'views/page2.php';
    }
}