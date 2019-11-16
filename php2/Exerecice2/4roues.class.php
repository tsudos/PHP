<?php
include_once('vehicule.class.php');
class Quatre_Roues extends Vehicule {
// Déclaration des attributs
    private  $nbPortes;
 
//méthodes publiques


    public function __construct($couleur,$poids,$nbPortes){
        parent::__construct($couleur,$poids);
        $this->nbPortes=$nbPortes;
    }



    //on fait appelle à parent::setCouleur($couleur);
    //qui ce serte de public function setCouleur($couleur) dans la class vehicule(mère) 
    public function repeindre($couleur) :void{
       parent::setCouleur($couleur);
     }

    function getCouleur() :string{
       return $this->couleur;
    }


    public function getInfo(){
        return 'ce véhicule à '.$this->nbPortes.' portes';

    }

    


}