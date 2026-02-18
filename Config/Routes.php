<?php

use WWW\Config\Router as Router;

$router = new Router();

$router->add('','HomeController','index');
$router->add('users','UserController','index');
$router->add('users/dettaglio/','UserController','show');

return $router;