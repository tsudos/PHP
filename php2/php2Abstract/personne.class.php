<?php

abstract class Personne
{
    private $nom;
    private $prenom;

    protected function __construct($nom, $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function __set($var, $valeur) {$this->$var = $valeur;}
    public function __get($var) {return $this->$var;}

    function __toString():string{
        return $this->prenom.' '.$this->nom; 
}
}

?>