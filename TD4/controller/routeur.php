<?php
require_once '{$ROOT_FOLDER}/controller/ControllerVoiture.php';
require_once '{$ROOT_FOLDER}/lib/File.php';
// On recupère l'action passée dans l'URL
$action = $_GET["action"];
// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action();
?>
