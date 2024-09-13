<?php
namespace app\controllers;

use helpers\Router;
use helpers\View;

class AuthController{
    public function login()
    {
        header('Location: http://127.0.0.1:8000/login');
    }
    public function logout()
    {
        session_start();
        $id = $_SESSION['id'];
        unset($id);
        header('Location: index.php');
        exit;
    }
    public function authenticatr()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
    }
}