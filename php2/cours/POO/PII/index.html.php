  <?php
class Geo
{

  public const PII = 3.14;

  public static function calculerPerimetreCercle($rayon){
    $resultat = 2*Self::PII*$rayon;
    echo $resultat.'surface';
  }

  public static function calculerSurfaceCercle($rayon){
    $resultat = Self::PII*pow($rayon,2);
    echo $resultat.'perimetre';
  }
}


Geo::calculerSurfaceCercle(10);
echo "<br/>";
Geo::calculerPerimetreCercle(10);
