<?php
namespace app\controllers;
use PDO;
use helpers\View;
use PDOException;
use database\connection;

class indexController
{
    public function index()
    {
        $request_uri = $_SERVER['REQUEST_URI'];

        // Extract parameters from the query string
        parse_str(parse_url($request_uri, PHP_URL_QUERY), $queryParams);

        // Ensure the parameters are properly extracted
        $user_id = $queryParams['user']['id'] ?? null;
        $token = $queryParams['token'] ?? null;
        session_start();
        $_SESSION['id'] = [$user_id];
        session_abort();
        return View::make('home',$_SESSION['id'])->render();
    }
}
