<?php
        //declaration de la class VilleConst
    class VilleConst
    {
            //  attributs
        private $_nom; 
        private $_Dept; 


            //contructeur
        public function __construct($_nom,$_Dept)
        {
            $this->nom = $_nom;
            $this->departement = $_Dept;
        } 

        public function getInfo():string
        {
            $text = "Et ".$this->nom. ' est dans le département '.$this->departement." (Avec class/Constructeur)";
            return $text;
        }   
            
    }
?>