<?php
class Vehicule {
// Déclaration des attributs
    private  $couleur;
    private $poids;
//méthodes publiques

    public function rouler():string {
        return " Véhicule qui roule ";
    }

    function setPoids($poids) :void{
        $this->poids = $poids;
    }

    function getPoids() :float {

        return $this->poids;
    }

    public function ajouter_personne(float $poids_personne) : void{
      $this->poids +=$poids_personne;
    }

}