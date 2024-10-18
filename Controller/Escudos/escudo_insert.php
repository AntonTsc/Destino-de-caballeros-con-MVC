<?php
    require_once("../../Model/MEscudo.php");

    $mEscudo = new MEscudo();

    $defensa = $_GET['defensa'];
    $tipo = $_GET['tipo'];

    $mEscudo->insertEscudo($defensa, $tipo);

    header("Location: escudos.php");
?>