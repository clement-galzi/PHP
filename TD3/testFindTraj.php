<?php
require_once 'Model.php';
require_once 'Utilisateur.php';
require_once 'Trajet.php';
$obj = Trajet::findPassagers("ABCD");
$voiture = new Voiture("Tesla","noire","AABBCC");
$voiture->save();
echo $obj->afficher();
echo $voiture -> afficher();


?>