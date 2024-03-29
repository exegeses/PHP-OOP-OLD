<?php

    class Persona2
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
            $mensaje  = 'Nombre: '.$this->getNombre();
            $mensaje .= '<br>';
            $mensaje .= 'Apellido: '.$this->getApellido();
            $mensaje .= '<br>';
            return $mensaje;
        }

        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }
        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        /**
         * @return mixed
         */
        public function getApellido()
        {
            return $this->apellido;
        }
        /**
         * @param mixed $apellido
         */
        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

    }