<?php 
namespace App\Controllers;

class PublicController {

    public function index(){
        session_start(['cookie_httponly' => true]);
        $age = 31;
        $name = htmlspecialchars($_GET['name']) ?? 'Nameless';        
        $fruits = ['Apple', 'Banana', 'Cherry', 'Pear'];
        include 'views/index.php';
    }
    
    public function page1(){
        session_start();
        include 'views/page1.php';
    }
    
    public function page2(){
        include 'views/page2.php';
    }
}