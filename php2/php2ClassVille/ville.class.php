<?php
//declaration de la class Ville
class Ville
{
    //  attributs
    private $_nom; 
    private $_Dept; 

    //public
        //setter
  public function setNom($newNom):void 
  {
    $this->nom = $newNom;
  }
        //Getter
  public function getNom():string 
  {
    return $this->nom;
  }
        
  public function setDept($newDept):void
  {
    $this->departement = $newDept;
  }
  public function getDept():string
  {
    return $this->departement;
  }

  public function getInfos():string{
    $text = "la ville ".$this->nom." est dans ".$this->departement;
    return $text;
  }
        
}
?>