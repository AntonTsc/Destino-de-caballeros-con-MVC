<?php
    require_once("../../Model/MEscudo.php");

    $id = $_GET['id'];

    $mEscudo = new MEscudo();
    $mEscudo->delEscudo($id);

    header("Location: escudos.php");
?>