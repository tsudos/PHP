<!doctype html>
<html>
<head>
    <title>Tableau PHP bis</title>

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
 /*       tbody tr {
            background-color:yellow;
            color:black;
        }

        tbody tr:last-child {
            background-color:red;
        }
        tbody tr:first-child {
            background-color:green;
        }
*/
    </style>
    <meta charset="UTF-8"/>
</head>
<body>

   
 
<?php
$tableau=array(1=>959,2=>1037,3=>960,4=>797,5=>663,6=>652,7=>560,8=>619,9=>623,10=>583);

//initialise la clé à 0 alors que la reférence est année 1 !!!
//$ensembleValeur="959;1037;960;797;663;652;560;619;623;583";
//$tableau=explode(";",$ensembleValeur);

$tailleTab =count($tableau);
$total=0;


//representation du tableau
echo "<table border='3'><caption>Nombre de décès dus aux accidents de la route</caption><thead><tr><th>Année</th><th>Décès</th></tr></thead><tbody>";
foreach ($tableau as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</tbody></table>";

//nb moyen de tuées/an
for ($i=1; $i<=$tailleTab;$i++){
    $total=$total+$tableau[$i];
}
echo "la moyenne de tuées par un accident de la route sur 10 ans est de ".($total/$tailleTab)."/an <br>";

/*exemple de la somme
echo array_sum($tableau);
*/

//nb de mort/J
echo "la moyenne de tuées par un accident de la route sur 10 ans est de ".round(($total/($tailleTab*365)),2)."/Jours <br>";





?>





</body>
</html>