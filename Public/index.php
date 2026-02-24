<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../Config/Routes.php';
// use WWW\Helpers\Debug;
// use WWW\Controllers\UserController;
include __DIR__.'/../Views/partials/header.php';

$url = $_SERVER['REQUEST_URI'] ?? 'home';

$router->dispatch($url);

include __DIR__.'/../Views/partials/footer.php';

