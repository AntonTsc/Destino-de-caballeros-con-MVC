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

    public function getArmaXid($id){
        $sentencia = $this->getCon()->prepare('SELECT * FROM arma WHERE id = ?');
        $sentencia->bind_param('i', $id);
        $sentencia->execute();

        return $sentencia->get_result()->fetch_assoc();
    }

    public function delArmas($id){
        $sentencia = $this->getCon()->prepare('DELETE FROM arma WHERE id = ?');
        $sentencia->bind_param('i', $id);
        $sentencia->execute();
        $sentencia->close();
    }

    public function insertArma($dano, $tipo){
        $sentencia = $this->getCon()->prepare('INSERT INTO arma (dano, tipo) VALUES (?, ?)');
        $sentencia->bind_param('is', $dano, $tipo);
        $sentencia->execute();
        $sentencia->close();
    }

    public function editArma($dano, $tipo, $id){
        $sentencia = $this->getCon()->prepare('UPDATE arma SET dano=?, tipo=? WHERE id = ?');
        $sentencia->prepare('isi', $dano, $tipo, $id);
        $sentencia->execute();
        $sentencia->close();
    }
}
?>