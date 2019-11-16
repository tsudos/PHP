<?php
$DJ1; $DJ2; 

$J1 = "BoB...";
$J2 ="Dylan";
$tabJ1 = array();
$tabJ2=array();
$tabDJ1 = array();
$tabDJ2=array();

echo "Bienvenue aux 2 joueurs !<br><br>";
echo "!!$J1 VS $J2 !! <br><br><br>";




//lancement des dé
for ($i=1;$i<=7;$i++){
    $DJ1 = rand(1,6);
    $DJ2 = rand(1,6);
    $compJ = $DJ1 <=> $DJ2;
        if ($compJ==0){
            array_push($tabJ1,0);
            array_push($tabJ2,0);
        }
        else if ($compJ==1) {
            array_push($tabJ1,1);
            array_push($tabJ2,0); 
        }
        else if ($compJ==-1){
            array_push($tabJ1,0);
            array_push($tabJ2,1); 
        }
    array_push($tabDJ1,$DJ1);
    array_push($tabDJ2,$DJ2);
}

//total par joueur
$totJ1 = array_sum($tabJ1);
$totJ2 = array_sum($tabJ2);

//liste des tirages
$listJ1 = implode(" ; ", $tabJ1);
$listJ2 = implode(" ; ", $tabJ2);

//liste des resultats
$listDJ1 = implode(" ; ", $tabDJ1);
$listDJ2 = implode(" ; ", $tabDJ2);



//mise en forme des resultats
echo "$J1 : $listDJ1;<br>$J2 : $listDJ2;<br><br><br>";

echo "$J1 a donc comme resultats : $listJ1 soit $totJ1 victoire(s)<br><br>tandis que $J2 a eu lui : $listJ2 soit $totJ2 victoire(s)<br><br>Donc ";
if (array_sum($tabJ1)==array_sum($tabJ2)){
    echo "il y a une égalité parfaite !";
}
else if (array_sum($tabJ1)>array_sum($tabJ2)){
    echo "$J1 à gagné, BRAVO !!!";
} else {
    echo "$J2 à gagné, BRAVO !!!";
}



?>