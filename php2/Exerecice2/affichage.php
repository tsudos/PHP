<?php

require_once ("Vehicule.class.php");
require_once ("4roues.class.php");
require_once ("2roue.class.php");
require_once ("camion.class.php");
require_once ("voiture.class.php");

$v1 = new Quatre_Roues('bleu','550',4);
$m1 = new Deux_Roues(125,"rouge",175);
$c1 = new Camion('bleu-blanc-rouge','19 Tonnes',3,4);
$v2 = new Voiture('violette','1t250',5);

echo 'C\'est la voiture qui '.$v1->rouler()."<br/><br/>";

//$v1->setPoids(500);

echo " Poids initial : ".$v1->getPoids()." kg.<br/>";

$v1->ajouter_personne(65);

echo " Poids après ajout  : ".$v1->getPoids()." kg <br/>";



echo "La voiture devait être blanche et je l'ai reçu en : ".$v1->getCouleur().".<br/>";

$v1->repeindre("rouge");

echo 'Mais je l\'ai fait repeindre en : '.$v1->getCouleur().".<br/>Et ".$v1->getInfo();

echo '<br/><br/>C\'est la moto qui '.$m1->rouler()."<br/><br/>";
echo $m1->getInfo();

echo $m1->setLitre(25); 

echo $m1->getInfoLitre();

$m1->ajoutLitre(25);

echo " Poids de la moto après le plein  : ".$m1->getPoids()." kg <br/>";

echo '<br/><br/>C\'est le camion qui '.$m1->rouler()."<br/><br/>";
echo $c1->getInfo();

$c1->ajouter_remorque(11.5);

echo "Et avec la remorque accrochée, il atteind : ".$c1->getLongueur()." mètres.<br/>";

echo '<br/><br/>C\'est la voiture 2 qui '.$m1->rouler()."<br/><br/>";
echo $v2->getInfo();
?>