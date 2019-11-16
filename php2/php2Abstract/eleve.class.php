<?php

require_once('personne.class.php');
class Eleve extends Personne
{
    private $classe;
   
    //toujours en public !!!!
    public function __construct($nom, $prenom, $classe){
        parent::__construct($nom, $prenom);
        $this->classe = $classe;
    }

    public function getClasse():string{
        return $this->classe; 
    }

}

?>