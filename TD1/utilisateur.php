<?php
class utilisateur {
	private $login;
  	private $nom;
  	private $prenom;

  	public function __construct($log, $nom, $prenom)  {
   $this->login = $log;
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