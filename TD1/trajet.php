<?php
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

  get($nom_attribut){
  	$this->$nom_attribut
  }
  set($nom_attribut, $valeur){
  	$this->$nom_attribut = $valeur;
  }
}
?>