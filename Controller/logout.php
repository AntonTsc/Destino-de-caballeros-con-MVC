<?php
    session_start();
    session_destroy(); // Elimina toda la información de la sesión actual
    header("Location: loginForm.php");
    exit();
?>