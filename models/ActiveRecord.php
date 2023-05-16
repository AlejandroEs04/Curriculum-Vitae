<?php 

namespace Model;

class ActiveRecord {
    // Arreglo de errores
    protected static $errores = [];

    // Errores
    public static function getErrores() {
        return static::$errores;
    }
    public function validar() {
        static::$errores = [];
        return static::$errores;
    }
}