<?php

use Controllers\PaginasController;
use MVC\Router;

require_once __DIR__ . "../../includes/app.php";

$router = new Router();

/** ZONA PUBLICA **/
$router->get('/', [PaginasController::class, 'index']);
$router->get('/portafolio', [PaginasController::class, 'portafolio']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);

/** ZONA PRIVADA **/

/** LOGIN O LOGOUT **/

$router->comprobarRutas();