<?php
class Vehicule {
// Déclaration des attributs
    private $couleur;
    private $poids;
//méthodes publiques

protected function __construct($couleur, $poids){
    $this->couleur = $couleur;
    $this->poids = $poids;
}

    public function rouler():string {
        return " qui roule ";
    }

    public function setPoids($poids) :void{
        $this->poids = $poids;
    }

    public function getPoids() :float {
        return $this->poids;
    }

    public function setCouleur($couleur) :void{
        $this->couleur = $couleur;
    }

    public function __set($var, $valeur) {$this->$var = $valeur;}
    public function __get($var) {return $this->$var;}

    public function ajouter_personne(float $poids_personne):void{
      $this->poids +=$poids_personne;
    }



}