<?php
use app\controllers\indexController;
use app\controllers\AuthController;

$router = new helpers\Router();
$router->get('/', [indexController::class, 'index']);
$router->get('/index.php', [indexController::class, 'index']);
$router->get('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));