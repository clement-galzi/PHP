<?php
require_once 'Model.php';
class utilisateur {
    private $login;
    private $nom;
    private $prenom;

    public function __construct($log=NULL , $nom=NULL , $prenom=NULL)  {
        if (!is_null($log) && !is_null($nom) && !is_null($prenom)) {
            $this->login = $log;
            $this->nom = $nom;
            $this->prenom = $prenom;
        }
    }
    public function get($nom_attribut){
    $this->$nom_attribut;
    }
    public static function getAllUtilisateurs(){
        $rep = Model::$pdo->query("SELECT * FROM utilisateur");
        $rep->setFetchMode(PDO::FETCH_CLASS,'utilisateur');
        $tab_obj = $rep->fetchAll();
        return $tab_obj;
    }
}
?>