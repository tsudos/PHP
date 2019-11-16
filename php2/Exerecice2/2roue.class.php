<?php
include_once('vehicule.class.php');
class Deux_Roues extends Vehicule {
// Déclaration des attributs
    private  $cylindrée;
    private $Litre;
 
//méthodes publiques


    public function __construct($cylindrée,$couleur,$poids){
        parent::__construct($couleur,$poids);
        $this->cylindrée=$cylindrée;
    }
/* 
    //on remonte à la classe mère pour recuperer les infos
    function setPoids($poids) :void{
        $this->poids = $poids;
    }

    function getPoids() :float {

        return $this->poids;
    }

    function setCouleur($couleur) :void{
        $this->couleur = $couleur;
    }

    function getCouleur() :string{
       return $this->couleur;
    }
*/
    public function getCylindrée(){
        return $this->cylindrée; 
    }

    public function getInfo(){
        return 'ce véhicule de '.$this->cylindrée.' cm3 est '.$this->couleur.' et pèse '.$this->poids.'.<br>';

    }

    function setLitre(float $Litre) :void{
        $this->Litre = $Litre;
    }

    public function getInfoLitre(){
        return 'ce véhicule à une capacité de '.$this->Litre.' litres dans son réservoire<br>';
    }

    public function ajoutLitre(float $Litre) :void{
            $this->poids +=$Litre;
          }

}