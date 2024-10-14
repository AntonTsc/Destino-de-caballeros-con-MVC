<?php
    require_once('../Model/MArma.php');
    require_once('../Views/VArmas.php');

    $mArma = new MArma();

    $vista = new VArmas();
    $vista->inithtml();
    $vista->formArma();
    $vista->endhtml();

    $dano = $_GET['dano'];
    $tipo = $_GET['tipo'];

    $mArma->insertArma($dano, $tipo);
?>