<?php

declare(strict_types=0);
//strict_types=1 alors le prog ne marche pas et la ligne 15 bug

function calcul_ttc (float $prix_ht,int $tva): float{

   return $prix_ht * (1 +$tva /100);

}

echo calcul_ttc(120.5,23)."<br/>";


echo calcul_ttc("120.5",20.5)."<br/>";

?>