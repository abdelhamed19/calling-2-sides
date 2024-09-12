<?php
namespace app\controllers;
use helpers\View;
class indexController{
    public function index()
    {
        return View::make('home')->render();
    }
}