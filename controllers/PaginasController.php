<?php

namespace Controllers;

use Model\Email;
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

        $email = new Email;
        $errores = Email::getErrores();
        $resultado = '';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crear una nueva instancia para correo
            $email =  new Email($_POST['contacto']);

            $errores = $email->validar();

            if(empty($errores)) {
                $message = "Tiene un correo de: " . $email->name . " " . $email->lastName . "\n";
                $message .= "Correo: " . $email->email . "\n";
                $message .= "Mensaje: " . $email->message . "\n\n";
                $message .= "Enviado el: " . $email->fecha;

                // In case any of our lines are larger than 70 characters, we should use wordwrap()
                $message = wordwrap($message, 70, "\r\n");

                // Send
                mail('2004.estrada.lopez@gmail.com', 'Tienes un correo nuevo', $message);

                $resultado = 1;
            }
        }

        $router->render('paginas/contacto', [
            'email'=> $email,
            'inicio' => True,
            'errores' => $errores,
            'resultado' => $resultado
        ]);
    }
}