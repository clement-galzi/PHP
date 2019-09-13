<?php
class trajet{
	 private $id;
  	private $poitDepart;
  	private $pointArrivee;
    private $date;
    private $nbPlaces;
    private $prix;
    private $conducteur_login;

  	public function __construct($data)  {
   $this->id = $log;
   $this->nom = $nom;
   $this->prenom = $prenom;
  } 

  get($nom_attribut){
  	$this->$nom_attribut
  }
  set($nom_attribut, $valeur){
  	$this->$nom_attribut = $valeur;
  }
}
?>