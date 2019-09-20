<?php 
	require_once 'Model.php';
	require_once 'voiture.php';
    $tab_voit = Voiture::getAllVoitures();

    foreach ($tab_voit as $obj){
            echo $obj->afficher();
        }

?>