<?php
        //declaration de la class Personne
    class Personne
    {
            //  attributs
        private $_nom; 
        private $_prenom;
        private $_adresse; 


            //contructeur
        public function __construct($_nom,$_prenom,$_adresse)
        {
            $this->nom = $_nom;
            $this->prenom = $_prenom;
            $this->adresse = $_adresse;
        }

        public function __destruct()
        {

        }

        public function getInfo():string
        {
            $text = "Mr/Mme ".$this->nom." ".$this->prenom." habitent ".$this->adresse;
            return $text;
        }   

        public function setAdresse($_adresse){
            $this->adresse=$_adresse;
        }
            
    }
?>