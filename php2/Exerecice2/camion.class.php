<?php
include_once('vehicule.class.php');
class Camion extends Quatre_Roues {
// Déclaration des attributs
    private  $Longueur;
 
//méthodes publiques
    public function __construct($couleur,$poids,$nbPortes,$Longueur){
        parent::__construct($couleur,$poids,$nbPortes);
        $this->Longueur=$Longueur;
    }
    


    public function getLongueur(){
        return $this->Longueur;
    }

    public function ajouter_remorque(float $longueur_remorque):void{
        $this->Longueur +=$longueur_remorque-2;
        //-2metres d'accroche
      }

    public function getInfo(){
        return 'ce camion de '.$this->Longueur.' mètres pèse maximum '.$this->poids.' poids en charges, et il est de couleurs '.$this->couleur.'.<br>'.parent::getInfo();
    }

}