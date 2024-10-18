<?php
    require_once('../../Model/MArma.php');
    require_once('../../Views/VArmas.php');


    //Recoger la id
    $id = $_GET['id'];

    //Conseguir el arma de la BBDD con la id
    $mArma = new MArma();
    $arma = $mArma->getArmaXid($id); 

    //Mostrar formulario con el arma
    $vista = new VArmas();
    $vista->inithtml();
    $vista->formEditArma($arma);
    $vista->endhtml();

?>