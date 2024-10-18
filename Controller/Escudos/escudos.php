<?php
    require_once("../../Model/MEscudo.php");
    require_once("../../Views/VEscudos.php");

    $mEscudo = new MEscudo();
    $vista = new VEscudos();
    
    $vista->inithtml();
    $vista->tablaEscudos($mEscudo->getEscudos());
    $vista->endhtml();
?>