<?php

require_once ("Vehicule.class.php");

$v1 = new Vehicule();

echo $v1->rouler()."<br/>";

$v1->setPoids(500);

echo " Poids initial : ".$v1->getPoids()." kg.<br/>";

$v1->ajouter_personne(65);

echo " Poids après ajout  : ".$v1->getPoids()." kg <br/>";

?>