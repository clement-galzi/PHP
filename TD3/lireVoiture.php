<?php 
	require_once 'Model.php';
	require_once 'voiture.php';
    $obj = Voiture::getVoitureByImmat("ABCD");
    $voiture = new Voiture("Tesla","noire","AABBCC");
    $voiture->save();
    echo $obj->afficher();
    echo $voiture -> afficher();


?>