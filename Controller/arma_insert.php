<?php
    require_once('../Views/VArmas.php');

    
    $vista = new VArmas();
    $vista->inithtml();
    $vista->formArma();
    $vista->endhtml();
  
?>