<?php
//indique que le type de la réponse renvoyée au client sera du Texte
header("Content-Type: text/plain");
//simulation du  temps d'attente du serveur (2 secondes)
sleep(10);
//calcul du nouveau gain entre 0 et 100 Euros
$resultat =  rand(0,100);
//envoi de la réponse à la page HTML
echo $resultat ;
?>