<?php
    require_once('../Model/MArma.php');
    require_once('../Views/VArmas.php');


    //Recoger la id
    $id = $_GET['id'];

    //Conseguir el arma de la BBDD con la id
    $mArma = new MArma();
    $arma = $mArma->getArmaXid($id); //Terminar codigo de esta funcion

    //Mostrar formulario con el arma
    $vista = new VArmas();
    $vista->inithtml();
    $vista->formEditArma($arma); //Terminar codigo de este formulario, que muestra la informacion del arma seleccionada
    $vista->endhtml();

?>