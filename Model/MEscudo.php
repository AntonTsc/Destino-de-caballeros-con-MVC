<?php
    require_once("Conexion.php");

    class MEscudo extends Conexion{
        public function getEscudos(){
            $query = $this->getCon()->query("SELECT * FROM escudo");
            $escudos = [];

            while($fila = $query->fetch_assoc()){
                $escudos[] = $fila;
            }

            return $escudos;
        }

    }
?>