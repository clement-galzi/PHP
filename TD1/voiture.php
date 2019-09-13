<?php
class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  public function getImmatriculation() {
       return $this->immatriculation;  
  }
     
  // un setter 
  public function setImmmatriculation($immatriculation2) {
       if  (strlen($immatriculation2)>8){
          $this->immatriculation = $immatriculation2;
       }
       
  }

  public function getCouleur() {
       return $this->couleur;  
  }
     
  // un setter 
  public function setCouleur($couleur2) {
       $this->couleur = $couleur2;
  }
      
  // un constructeur
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
           
  // une methode d'affichage.
  public function afficher() {
    echo "<br\> Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur) <br/>";
    
  }
}
?>

