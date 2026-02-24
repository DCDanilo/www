<?php

namespace WWW\Controllers;

class HomeController
{
    public function index()
    {
        include __DIR__ . '/../Views/home.php';
    }

    public function orariTreni()
    {
        include __DIR__ . '/../Views/orari-treni.php';
    }

    public function stazioni()
    {
        include __DIR__ . '/../Views/stazioni.php';
    }

    public function carrozze()
    {
        include __DIR__ . '/../Views/carrozze.php';
    }
}
