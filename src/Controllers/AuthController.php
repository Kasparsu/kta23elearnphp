<?php 
namespace App\Controllers;

use PDO;
use PDOException;
class AuthController {

    public function login(){
        include 'views/login.php';
    }
    public function register(){
        include 'views/register.php';
    }

    public function store(){
        var_dump($_POST);
        $conn = new PDO('sqlite:db.sqlite');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $email = $_POST['email'];
        $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (email, password)
        VALUES ('$email', '$pass')";
        // use exec() because no results are returned
        $conn->exec($sql);
        
    }
}