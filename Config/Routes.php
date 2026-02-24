<?php

use WWW\Config\Router as Router;

$router = new Router();

//Rotte Sito
$router->add('','HomeController','index');
$router->add('orari-treni','HomeController','orariTreni');
$router->add('stazioni','HomeController','stazioni');
$router->add('carrozze','HomeController','carrozze');

//Rotte autenticazione
$router->add('registrati','AuthController','register');
$router->add('accedi','AuthController','login');
$router->add('users/login','AuthController','authenticate');
$router->add('password-reset','AuthController','resetPassword');

//Rotte utente
$router->add('users/store','UserController','store');
$router->add('profilo', 'UserController', 'profilo');  
$router->add('users/reset-password','UserController','resetPassword');
$router->add('users/logout','UserController','logout');

return $router;