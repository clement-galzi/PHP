<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
</head>
<body>
	<?php require_once("voiture.php"); 
	$voiture1 = new voiture("ferrari","rouge","vroum");
	$voiture1->afficher();
	?>
</body>
</html>