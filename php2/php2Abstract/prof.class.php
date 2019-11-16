<?php

require_once('personne.class.php');
class Prof extends Personne
{
    private $specialisation;
   
    //toujours en public !!!!
    public function __construct($nom, $prenom, $specialisation){
        parent::__construct($nom, $prenom);
        $this->specialisation = $specialisation;
    }

    public function getSpecialisation(){
        return $this->specialisation; 
    }

    public function getProf():string{
        return parent::__toString().' est prof de '.$this->specialisation; 
    }

}

?>