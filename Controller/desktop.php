<?php
    require_once("../Views/VLogin.php");

    //Verificamos que en la variable usuario_logueado haya un usuario definido, si no lo está, lo devuelve al log in
    session_start();
    if(!isset($_SESSION['usuario_logueado'])){
        header("Location: loginForm.php");
    }

    $vista = new VLogin();

    $vista->inithtml();
    $vista->desktop();
    $vista->endhtml();
?>