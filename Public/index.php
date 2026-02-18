<?php
// public/index.php

require_once __DIR__ . '/../vendor/autoload.php';

use WWW\Controllers\UserController;
use WWW\Helpers\Debug;

// Recuperiamo l'URL pulita (es. "prodotti/scarpe")
$url = $_SERVER['REQUEST_URI'] ?? 'home';

$url = trim($url, '/');

if($url === 'users'){
    $controller = new UserController();
    $controller->index();
}else{
    echo "pagina non trovata";
}