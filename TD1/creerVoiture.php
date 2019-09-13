<?php  
	if (empty($_POST)){
		echo"tableau vide";
	}
	else {
		require_once("voiture.php"); 
		$voiture1 = new voiture($_POST["marque"],$_POST["couleur"],$_POST["immatriculation"]);
		$voiture1->afficher();
	}
	

?>