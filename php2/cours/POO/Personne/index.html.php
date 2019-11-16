<?php
class Personne
{
  private $nom;
  private $prénom;
  private $adresse;

  public function __construct($nom,$prénom,$adresse)
  {
    $this->nom=$nom;
    $this->prénom=$prénom;
    $this->adresse=$adresse;
  }

  public function __destruct()
  {
    echo "<script type='text/javascript'>alert('humain : $this->prénom $this->nom suprimé. Il n\'est pas mort ☺ ! Normalement…')</script>";
  }

  public function getPersonne()
  {
    $texte=" $this->prénom <br /> $this->nom <br /> $this->adresse <br />";
    return $texte;
  }

  public function setAdresse($adresse)
  {
    $this->adresse=$adresse;
  }
}

echo "Avant le unset : ";
$humain = new Personne("Pasmoi","Moi","1 rue DeLaRue");
echo $humain->getPersonne();
$humain->setAdresse("1 rue Pas DeLaRue");
echo $humain->getPersonne();

unset($humain);
echo "apres le unset :";
echo $humain->getPersonne();
?>
