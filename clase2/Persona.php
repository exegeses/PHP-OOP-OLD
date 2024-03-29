<?php

    class Persona
    {
        private $nombre;
        private $apellido;

        public function __construct($nombre, $apellido)
        {
            $this->setNombre($nombre);
            $this->setApellido($apellido);
        }

        public function verDatos()
        {
            $mensaje = 'Nombre: '. $this->getNombre();
            $mensaje .= '<br>';
            $mensaje .= 'Apellido: '.$this->getApellido();
            $mensaje .= '<br>';
            return $mensaje;
        }

        public function getNombre()
        {
            return $this->nombre;
        }
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getApellido()
        {
            return $this->apellido;
        }
        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

    }