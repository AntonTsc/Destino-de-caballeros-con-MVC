<?php
    require_once("conexion.php");

    class MCaballero extends Conexion{
        public function getCaballeros(){
            $query = $this->getCon()->query("SELECT * FROM caballero");
            $caballeros = [];

            while($fila = $query->fetch_assoc()){
                $caballeros[] = $fila;
            }

            return $caballeros;
        }

        public function tienePermiso($nombre){
            $caballeros = $this->getCaballeros();

            foreach($caballeros as $caballero){
                if($nombre == $caballero['nombre']){
                    return true;
                }
            }
            
            return false;
        }
    }
?>