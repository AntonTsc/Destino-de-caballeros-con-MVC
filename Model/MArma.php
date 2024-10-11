<?php
require_once 'Conexion.php';

class MArma extends Conexion{
    public function getArmas(){
        $query = $this->getCon()->query('SELECT * FROM arma');
        $armas = [];

        while($fila = $query->fetch_assoc()){
            $armas[] = $fila;
        }

        return $armas;
    }

    public function delArmas($id){
        $sentencia = $this->getCon()->prepare('DELETE FROM arma WHERE id = ?');
        $sentencia->bind_param('i', $id);
        $sentencia->execute();
        $sentencia->close();
        
        header("Location: armas.php");
    }
}
?>