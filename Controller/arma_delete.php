<?php
    require_once('../Model/MArma.php');

    $id = $_GET['id'];

    $mArma = new MArma();
    $mArma->delArmas($id);
    
    header("Location: armas.php");
?>