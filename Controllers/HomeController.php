<?php
namespace WWW\Controllers;

class HomeController {
    public function index(){
        include __DIR__.'/../Views/Home.php';
    }
}