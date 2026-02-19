<?php
// public/index.php

require_once __DIR__ . '/../vendor/autoload.php';

use WWW\Controllers\UserController;
use WWW\Helpers\Debug;

require_once __DIR__ . '/../Config/Routes.php';

$url = $_SERVER['REQUEST_URI'] ?? 'home';

// Debug::dd($url);
$router->dispatch($url);

