<?php
namespace WWW\Config;

class Router {
    protected $routes = [];

    // Metodo per registrare le rotte
    public function add($route, $controller, $action) {
        $this->routes[$route] = [
            'controller' => $controller, 
            'action' => $action
        ];
    }

    // Metodo per smistare la richiesta
    public function dispatch($url) {
        // Rimuoviamo gli slash all'inizio e alla fine
        $url = trim($url, '/');

        if (array_key_exists($url, $this->routes)) {
            $controllerName = $this->routes[$url]['controller'];
            $action = $this->routes[$url]['action'];

            // Istanziamo il controller (es. WWW\Controllers\UserController)
            $controllerPath = "WWW\\Controllers\\" . $controllerName;
            $controller = new $controllerPath();
            $controller->$action();
        } else {
            http_response_code(404);
            echo "404 - Pagina non trovata";
        }
    }
}