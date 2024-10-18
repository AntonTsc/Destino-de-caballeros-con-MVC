<?php
    require_once("../../Model/MEscudo.php");
    
    $id = $_GET['id'];
    $defensa = $_GET['defensa'];
    $tipo = $_GET['tipo'];

    $mEscudo = new MEscudo();
    $mEscudo->editEscudo($defensa, $tipo, $id);
    
    header("Location: escudos.php");
?>