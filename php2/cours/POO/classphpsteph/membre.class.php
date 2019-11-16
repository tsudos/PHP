<?php
//declaration de la class Membre
class Membre
{
    //  attributs
    private $_nom; 
    private $_prenom; 
    private $_age; 
    private $_email; 

    //methodes   
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
        
  public function setPrenom($newPrenom):void
  {
    $this->prenom = $newPrenom;
  }
  public function getPrenom():string
  {
    return $this->prenom;
  }
        
  public function setAge($newAge):void
  {
    $this->age = $newAge;
  }
  public function getAge():int
  {
    return $this->age;
  }
  public function setEmail($newEmail):void
  {
    $this->email = $newEmail;
  }
  public function getEmail():string
  {
    return $this->email;
  }
}
?>