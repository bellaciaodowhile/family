<?php 
    class MySql extends Conexion {
        private $conexion;
        private $strQuery;
        private $arrValues;
        public function __construct() {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }

        // Insert
        public function insert($query, $arrValues) {
            $this->strQuery = $query;
            $this->arrValues = $arrValues;

            $insert = $this->conexion->prepare($this->strQuery);
            $resInsert = $insert->execute($this->arrValues);

            if ($resInsert) {
                $lastInsert = $this->conexion->lastInsertId();
            } else {
                $lastInsert = 0;
            }
            return  $lastInsert;
            
        }
        // Select Only
        public function select($query) {
            $this->strQuery = $query;
            $res = $this->conexion->prepare($this->strQuery);
            $res->execute();
            $data = $res->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
         // Select All
        public function selectAll($query) {
            $this->strQuery = $query;
            $res = $this->conexion->prepare($this->strQuery);
            $res->execute();
            $data = $res->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }
        // Update
        public function update(string $query, array $arrValues) {
            $this->strQuery = $query;
            $this->arrValues = $arrValues;

            $update = $this->conexion->prepare($this->strQuery);
            $res = $update->execute($this->arrValues);
            return $res;
        }
        // Delete
        public function delete(string $query) {
            $this->strQuery = $query;
            $res = $this->conexion->prepare($this->strQuery);
            $del = $res->execute();
            return $del;
        }
    }