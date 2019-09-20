<?php
require_once 'Model.php';
class trajet{
	 private $id;
  	private $pointDepart;
  	private $pointArrivee;
    private $date;
    private $nbPlaces;
    private $prix;
    private $conducteur_login;

  	public function __construct($data)  {
       $this->id = $data["id"];
       $this->pointDepart = $data["pointDepart"];
       $this->pointArrivee = $data["pointArrivee"];
       $this->date = $data["date"];
       $this->nbPlaces = $data["nbPlaces"];
       $this->prix = $data["prix"];
       $this->conducteur_login = $data["conducteur_login"];
    }

    public function get($nom_attribut){
        $this->$nom_attribut;
      }

    public function set($nom_attribut, $valeur){
        $this->$nom_attribut = $valeur;
  	}

    public static function getAllTrajets(){
        $rep = Model::$pdo->query("SELECT * FROM trajet");
        $rep->setFetchMode(PDO::FETCH_CLASS,'trajet');
        $tab_obj = $rep->fetchAll();
        return $tab_obj;
    }
}
?>