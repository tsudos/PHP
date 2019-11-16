<?php
require_once('ville.class.php'); 


class Quartier extends Ville
{
    //propriétés-attributs
    private $quartier;
    private $nbHabitants;

    //methodes
    public function __construct($nom, $depart, $quartier, $nbHabitants )
    {
        //on surcharge avec parent::__construct au lieu de remplir 2 lignes de $this
        parent::__construct($nom,$depart);
        $this->quartier = $quartier;
        $this->nbHabitants = $nbHabitants;
    }
    //Deux méthodes magiques
    public function __set($var, $valeur) {$this->$var = $valeur;}
    public function __get($var) {return $this->$var;}

    // !! attention private et protected ne marche pas
    public function getInfo(){
        //on surcharge avec parent::getInfo pour recuperer les infos du parent
        $info2 = parent::getInfo().'.<br>Le quartier '.$this->quartier.' à '.$this->nbHabitants.' habitants.';
        return $info2;
    }
}
?>