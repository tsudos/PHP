<?php
    
class Ville
{
    //propriétés-attributs
    protected $nom;
    protected $depart;

    //methodes
    public function __construct($nom, $depart)
    {
        $this->nom = $nom;
        $this->depart = $depart;
    }
    //Deux méthodes magiques
    public function __set($var, $valeur) {$this->$var = $valeur;}
    public function __get($var) {return $this->$var;}


    // !! attention private et protected ne marche pas
    public function getInfo(){
        $Info = 'La ville de '.$this->nom.' est dans le département : '.$this->depart;
        return $Info;
    }
}
?>