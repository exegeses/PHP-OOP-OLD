<?php

    class Conexion
    {
        private function __construct()
        {} // evitamos que haya objetos

        static function conectar()
        {
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            $link = new PDO(
                            'mysql:host=localhost;dbname=agencia',
                       'root',
                        'root',
                            $opciones
                        );
            return $link;
        }
    }