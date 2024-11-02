<?php
    require_once("../Views/VLogin.php");

    $vista = new VLogin();
    
    $vista->inithtml();
    $vista->formLogin();
    $vista->endhtml();
?>