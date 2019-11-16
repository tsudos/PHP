<?php
  /**
   * class ville
   */
  class Ville
  {
    private  $nom;
    private $depart;

    function __construct($nom, $depart)
    {
      $this->nom = $nom;
      $this->depart = $depart;
    }

    public function getInfos() : string
    {
      $text = "La ville de " . $this->nom . " est dans le département : " . $this->depart . "<br/>" ;
      return $text;
    }
  }

 $lyon = new Ville('Lyon','Rhone');
 $Nantes = new Ville('Nantes','Loire Atlantique');

 echo $lyon->getInfos();
 echo $Nantes->getInfos();
