<?php
include_once('vehicule.class.php');
class Voiture extends Quatre_Roues {
// Déclaration des attributs
    private  $nbPneuNeige;
 
//méthodes publiques

    public function __construct($couleur,$poids,$nbPortes,$nbPneuNeige=0){
        parent::__construct($couleur,$poids,$nbPortes);
        $this->nbPneuNeige=$nbPneuNeige;
    }

    public function getInfo(){
        return 'ce véhicule à '.parent::getInfo().' et '.$this->nbPneuNeige.' pneu neige.<br>';

    }

}