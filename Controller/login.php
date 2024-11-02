<?php
    require_once("../Model/MCaballero.php");

    $mCaballero = new MCaballero();

    $nombre = $_POST["username"];
    
    if($mCaballero->tienePermiso($nombre)){
        session_start();
        $_SESSION['usuario_logueado'] = $nombre;
        header("Location: desktop.php");
        exit(); // Importante esta linea para que detener la ejecución del código después de redirigir a desktop.php
    }
    header("Location: loginForm.php");
?>