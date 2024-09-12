<?php
namespace app\controllers;

use helpers\Router;
use helpers\View;

class AuthController{
    public function login()
    {
        header('Location: http://127.0.0.1:8000/login');
    }
    public function register()
    {
        return 'register';
    }
    public function authenticatr()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
    }
}