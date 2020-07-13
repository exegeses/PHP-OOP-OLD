<?php

    class Cliente extends Persona
    {
        private $nroCliente;


        public function getNroCliente()
        {
            return $this->nroCliente;
        }
        public function setNroCliente($nroCliente)
        {
            $this->nroCliente = $nroCliente;
        }

    }