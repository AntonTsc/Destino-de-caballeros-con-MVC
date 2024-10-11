<?php
    require_once('../Model/MArma.php');
    require_once('../Views/VArmas.php');

    $mArma = new MArma();

    $vista = new VArmas();
    $vista->inithtml();
    $vista->formArma();
    $vista->endhtml();
?>