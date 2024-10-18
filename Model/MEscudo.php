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

        public function getEscudoXId($id){
            $sentencia = $this->getCon()->prepare("SELECT * FROM escudo WHERE id = ?");
            $sentencia->bind_param("i", $id);
            $sentencia->execute();
            
            return $sentencia->get_result()->fetch_assoc();
        }

        public function delEscudo($id){
            $sentencia = $this->getCon()->prepare("DELETE FROM escudo WHERE id = ?");
            $sentencia->bind_param("i", $id);
            $sentencia->execute();
            $sentencia->close();
        }

        public function insertEscudo($defensa, $tipo){
            $sentencia = $this->getCon()->prepare("INSERT INTO escudo (defensa, tipo) VALUES (?, ?)");
            $sentencia->bind_param("is", $defensa, $tipo);
            $sentencia->execute();
            $sentencia->close();
        }

        public function editEscudo($defensa, $tipo, $id){
            $sentencia = $this->getCon()->prepare("UPDATE escudo SET defensa=?, tipo=? WHERE id = ?");
            $sentencia->bind_param("isi", $defensa, $tipo, $id);
            $sentencia->execute();
            $sentencia->close();
        }
    }
?>