<?php
    require_once("../../Views/VEscudos.php");
    require_once("../../Model/MEscudo.php");

    $id = $_GET['id'];

    $mEscudo = new MEscudo();
    $escudo = $mEscudo->getEscudoXId($id);

    $vista = new VEscudos();
    $vista->inithtml();
    $vista->formEditEscudo($escudo);
    $vista->endhtml();
?>