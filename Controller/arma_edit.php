<?php
    require_once("../Model/MArma.php");

    $mArma = new MArma();

    //Recoger datos
    $id = $_GET['id'];
    $dano = $_GET['dano'];
    $tipo = $_GET['tipo'];

    $mArma->editArma($dano, $tipo, $id);
    header("Location: armas.php");
?>