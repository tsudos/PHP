<?php

include_once('forme.class.php');
class Rectangle extends Forme{
    private $longueur;
    private $largeur;

    public function __construct(float $larg,float $long){
        $this->largeur=$larg;
        $this->longueur=$long;
    }

    public function surface():float {
       
       return $this->largeur*$this->longueur;
    }

    function __toString():string{
        return "Largeur : $this->largeur, Longueur : $this->longueur<br>"; 
    }

}
?>