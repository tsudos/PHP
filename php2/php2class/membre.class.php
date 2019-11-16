<?php
//declaration de la class Membre
class Membre
{
    //  attributs
    private $_nom; 
    private $_prenom; 
    private $_age; 
    private $_email; 

    //contructeur
    public function __construct($_nom,$_prenom,$_age,$_email)
{
  $this->nom = $_nom;
  $this->prenom = $_prenom;
  $this->age = $_age;
  $this->email = $_email;
}



    //methodes   

/*     //private
  private function majuscules($asChaine)
  {
    return strtoupper($asChaine);
  }
 */

    //public
        //setter
  public function setNom($newNom):void 
  {
   // $this->nom = majuscules($newNom);
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