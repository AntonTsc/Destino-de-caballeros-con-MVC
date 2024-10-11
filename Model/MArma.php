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
}
?>