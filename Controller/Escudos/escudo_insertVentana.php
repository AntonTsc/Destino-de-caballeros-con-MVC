<?php
    require_once("../../Views/VEscudos.php");

    $vista = new VEscudos();
    $vista->inithtml();
    $vista->formEscudo();
    $vista->endhtml();
?>