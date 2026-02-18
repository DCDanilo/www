<?php
namespace WWW\Config;

use wWW\Config\Router;

$router = new Router();

$router->add('home','HomeController','index');

$router->dispatch();s