<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }
    public static function read() {
        $immat = $_GET["immat"];
        $v = ModelVoiture::getVoitureByImmat($immat);     //appel au modèle pour gerer la BD
        if ($v==NULL)
            require_once('../view/voiture/error.php');
        else
            require ('../view/voiture/detail.php');  //"redirige" vers la vue

    }
    public static function create(){
        require_once ('../view/voiture/create.php');
    }
    public static function created(){
        if (empty($_POST)){
            echo"tableau vide";
        }
        else {
            require_once ('../model/ModelVoiture.php');
            $voiture1 = new ModelVoiture($_POST["marque"],$_POST["couleur"],$_POST["immatriculation"]);
            $voiture1->save();
            self::readAll();
        }
    }
}
?>

