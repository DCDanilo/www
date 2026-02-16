<?php
// public/index.php

require_once __DIR__ . '/../vendor/autoload.php';

use WWW\Controller\UserController;

// Recuperiamo l'URL pulita (es. "prodotti/scarpe")
$url = $_GET['url'] ?? 'home';

if($url === 'users'){
    $controller = new UserController();
    $controller->index();
}else{
    echo "pagina non trovata";
}