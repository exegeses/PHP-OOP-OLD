<?php

    class Region
    {
        private $regID;
        private $regNombre;

        ######################
        #### CRUD de regiones
        ######################

        /**
         * método para listar regiones
         * @return array $regiones
         * */
        public function listarRegiones()
        {
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre 
                        FROM regiones";
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $regiones = $stmt->fetchAll();
            return $regiones;
        }

        public function verRegionPorID()
        {
            $regID = $_GET['regID'];
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre 
                        FROM regiones
                        WHERE regID = :regID ";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);
            $stmt->execute();

            $region = $stmt->fetch();
            $this->setRegID($region['regID']);
            $this->setRegNombre($region['regNombre']);

        }

        public function agregarRegion()
        {
            $regNombre = $_POST['regNombre'];
            $link = Conexion::conectar();

            $sql = "INSERT INTO regiones
                            ( regNombre ) 
                        VALUES
                            ( :regNombre )";

            $stmt = $link->prepare($sql);
            $stmt->bindParam(':regNombre', $regNombre, PDO::PARAM_STR);

            if( $stmt->execute() ){
                // registramos atributos en el objeto
                $this->setRegNombre($regNombre);
                $this->setRegID( $link->lastInsertId() );
                return true;
            }
            return false;
        }

        public function modificarRegion()
        {
            $regID = $_POST['regID'];
            $regNombre = $_POST['regNombre'];
            $link = Conexion::conectar();

            $sql = "UPDATE regiones
                        SET 
                            regNombre = :regNombre
                        WHERE 
                            regID = :regID";

            $stmt = $link->prepare($sql);
            $stmt->bindParam(':regNombre', $regNombre, PDO::PARAM_STR);
            $stmt->bindParam(':regID', $regID, PDO::PARAM_INT);

            if( $stmt->execute() ){
                // registramos atributos en el objeto
                $this->setRegNombre($regNombre);
                $this->setRegID( $regID );
                return true;
            }
            return false;

        }

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