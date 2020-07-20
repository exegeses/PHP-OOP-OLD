<?php

    class Region
    {
        private $regID;
        private $regNombre;

        ######################
        #### CRUD de regiones
        ######################


         ######## getters & setters
        public function getRegID()
        {
            return $this->regID;
        }
        public function setRegID($regID)
        {
            $this->regID = $regID;
        }

        public function getRegNombre()
        {
            return $this->regNombre;
        }
        public function setRegNombre($regNombre)
        {
            $this->regNombre = $regNombre;
        }
    }