<?php

    class Cliente extends Persona
    {
        private $nroCliente;

        public function __construct($nombre, $apellido, $nroCliente)
        {
            Persona::__construct($nombre, $apellido);
            $this->setNroCliente($nroCliente);
        }

        public function verDatos()
        {
            $mensaje = Persona::verDatos();
            $mensaje .= 'nroCliente: '. $this->getNroCliente();
            return $mensaje;
        }
        
        public function getNroCliente()
        {
            return $this->nroCliente;
        }
        public function setNroCliente($nroCliente)
        {
            $this->nroCliente = $nroCliente;
        }

    }