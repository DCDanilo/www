<?php

use WWW\Config\Router as Router;

$router = new Router();

$router->add('','HomeController','index');

$router->add('users','UserController','index');
$router->add('users/dettaglio','UserController','show');
$router->add('users/crea','UserController','create');
$router->add('users/store','UserController','store');
$router->add('users/elimina','UserController','delete');
$router->add('users/modifica','UserController','edit');

return $router;