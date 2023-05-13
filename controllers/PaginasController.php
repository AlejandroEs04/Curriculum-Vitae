<?php

namespace Controllers;

use MVC\Router;

class PaginasController {
    public static function index(Router $router) {

        $router->render('paginas/index', [
            
        ]);
    }

    public static function portafolio(Router $router) {

        $router->render('paginas/portafolio', [
            'inicio' => True
        ]);
    }

    public static function contacto(Router $router) {

        $router->render('paginas/contacto', [
            'inicio' => True
        ]);
    }
}