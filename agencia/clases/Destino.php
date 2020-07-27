<?php

    class Destino
    {
        private $destID;
        private $destNombre;
        private $regID;
        protected $regNombre;
        private $destPrecio;
        private $destAsientos;
        private $destDisponibles;
        private $destActivo;

        /**
         * método para listar Destinos
         * @return array $destinos
        */
        public function listarDestinos()
        {
            $link = Conexion::conectar();
            $sql = "SELECT destID, destNombre, 
                            destinos.regID, regNombre,  
                            destPrecio, 
                            destAsientos, destDisponibles,
                            destActivo
                       FROM destinos, regiones
                       WHERE destinos.regID = regiones.regID";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $destinos = $stmt->fetchAll();
            return $destinos;
        }

        public function verDestinoPorID()
        {
            $destID = $_GET['destID'];
            $link = Conexion::conectar();
            $sql = "SELECT destID, destNombre, 
                            destinos.regID, regNombre,  
                            destPrecio, 
                            destAsientos, destDisponibles,
                            destActivo
                       FROM destinos, regiones
                       WHERE destinos.regID = regiones.regID
                         AND destID = :destID";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':destID', $destID, PDO::PARAM_INT);

            if ( $stmt->execute() ){
                $destino = $stmt->fetch();
                $this->setDestID($destID);
                $this->setDestNombre($destino['destNombre']);
                $this->setRegID($destino['regID']);
                /// nombre de la regíon
                $this->setRegNombre($destino['regNombre']);
                $this->setDestPrecio($destino['destPrecio']);
                $this->setDestAsientos($destino['destAsientos']);
                $this->setDestDisponibles($destino['destDisponibles']);
                $this->setDestActivo(1);
                return true;
            }
            return false;
        }

        #######
        public function setRegNombre($regNombre)
        {
            $this->regNombre = $regNombre;
        }
        public function getRegNombre()
        {
            return $this->regNombre;
        }

        ######## getters $ setters   ####
        /**
         * @return mixed
         */
        public function getDestID()
        {
            return $this->destID;
        }

        /**
         * @param mixed $destID
         */
        public function setDestID($destID)
        {
            $this->destID = $destID;
        }

        /**
         * @return mixed
         */
        public function getDestNombre()
        {
            return $this->destNombre;
        }

        /**
         * @param mixed $destNombre
         */
        public function setDestNombre($destNombre)
        {
            $this->destNombre = $destNombre;
        }

        /**
         * @return mixed
         */
        public function getRegID()
        {
            return $this->regID;
        }

        /**
         * @param mixed $regID
         */
        public function setRegID($regID)
        {
            $this->regID = $regID;
        }

        /**
         * @return mixed
         */
        public function getDestPrecio()
        {
            return $this->destPrecio;
        }

        /**
         * @param mixed $destPrecio
         */
        public function setDestPrecio($destPrecio)
        {
            $this->destPrecio = $destPrecio;
        }

        /**
         * @return mixed
         */
        public function getDestAsientos()
        {
            return $this->destAsientos;
        }

        /**
         * @param mixed $destAsientos
         */
        public function setDestAsientos($destAsientos)
        {
            $this->destAsientos = $destAsientos;
        }

        /**
         * @return mixed
         */
        public function getDestDisponibles()
        {
            return $this->destDisponibles;
        }

        /**
         * @param mixed $destDisponibles
         */
        public function setDestDisponibles($destDisponibles)
        {
            $this->destDisponibles = $destDisponibles;
        }

        /**
         * @return mixed
         */
        public function getDestActivo()
        {
            return $this->destActivo;
        }

        /**
         * @param mixed $destActivo
         */
        public function setDestActivo($destActivo)
        {
            $this->destActivo = $destActivo;
        }
    }