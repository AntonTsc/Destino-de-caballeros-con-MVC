<?php
    require_once('../../Model/MArma.php');
  
    $mArma = new MArma();
    $dano = $_GET['dano'];
    $tipo = $_GET['tipo'];

    $mArma->insertArma($dano, $tipo);
    header('Location: armas.php');
?>