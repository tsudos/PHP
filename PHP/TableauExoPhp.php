<!doctype html>
<html>
<head>
    <title>Tableau PHP</title>

    <style type="text/css">
        body{
            background-color: #444444;
            color : white;
            font-size:20px;
        }
        table{
            border-radius: 10px;
            text-align:center;
            border :4px ridge white;
        }
        th, td{
            border :4px ridge #444444;
        }
        th {
            background-color:black;
            color : white;
            border-radius: 10px;
        }
        td {
            border-radius: 10px;
        }
        tbody tr {
            background-color:yellow;
            color:black;
        }

        tbody tr:last-child {
            background-color:red;
        }
        tbody tr:first-child {
            background-color:green;
        }

    </style>
    <meta charset="UTF-8"/>
</head>
<body>

   
 
<?php
    //bouton rafraichir
    echo "<button class='btn' onclick='document.location.reload(false)'>Relancer</button>";
    //initialisation du tableau
    //$tableau= array(rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100));
    
    $tableau =array();
    for ($i=0; $i<10;$i++){
        array_push($tableau,rand(1,100));
    }

    //tableau initial des valeur aléatoire
    echo "<table border='2'><thead><tr><th>clé</th><th>nb aléa</th></tr></thead><tbody>";
    foreach ($tableau as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</tbody></table>";


    //calcul de la somme
    $somme=0;

    echo "<br><br>";
    for ($i=0; $i<count($tableau);$i++) {
        $somme += $tableau[$i];  
    }
    echo "la somme du tableau est de $somme<br>"; 
  

    //affichage du plus petit et du plus grand
    echo "<br>";
    sort($tableau);
    $celluleMax = count($tableau)-1; 
    echo "la valeur la plus petite est $tableau[0]<br>";
    echo "la valeur la plus grande est $tableau[$celluleMax]";


    //tri pair et impair
    echo "<br><br>";
    $pair=array();
    $impair=array();

    for ($t=0; $t<count($tableau);$t++){
        $modulo = $tableau[$t]%2;
        if ($modulo==0){
            array_push($pair,$tableau[$t]);
        }
        else array_push($impair,$tableau[$t]);
    }

    //tab impaire
    sort($impair);
    echo "<table border='2'><caption>IMPAIRE</caption><thead><tr><th>clé</th><th>nb aléa</th></tr></thead><tbody>";
    foreach ($impair as $key => $value) {
        echo "<tr><td class='impair'>$key</td><td>$value</td></tr>";
    }
    echo "</tbody></table>";
    echo "<br>";

    //tab pair
    sort($pair);
    echo "<table border='2'><caption>PAIR</caption><thead><tr><th>clé</th><th>nb aléa</th></tr></thead><tbody>";
    foreach ($pair as $key => $value) {
        echo "<tr><td class='pair'>$key</td><td>$value</td></tr>";
    }
    echo "</tbody></table><br><br>";

    //trier et afficher le tableau d'origine
    sort($tableau);
    $nbAlea = implode(" ; ",$tableau);
    echo "voici la suite de nombres aléatoires du tableau : $nbAlea<br>";

?>





</body>
</html>