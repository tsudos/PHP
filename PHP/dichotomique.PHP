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

        .btn {
            text-decoration: none;
            padding: 9px;
            font-family: tahoma;
            font-size: 0.5em;
            color: #0c0c0c;
            background-color: #d8d8d8;
            border-radius: 11px;
            -webkit-border-radius: 11px;
            -moz-border-radius: 11px;
            border: 3px groove #a5a5a5;
            box-shadow: 3px 3px 12px #95b3d7;
            -webkit-box-shadow: 3px 3px 12px #95b3d7;
            -moz-box-shadow: 3px 3px 12px #95b3d7;
        }


        .btn:hover {
            padding: 10px;
            font-size: 0.6em;
            background-color: #548dd4;
            border: 3px solid #0f243e;
            box-shadow: -3px -3px 12px #95b3d7;
            -webkit-box-shadow: -3px -3px 12px #95b3d7;
            -moz-box-shadow: -3px -3px 12px #95b3d7;
        }

    </style>
    <meta charset="UTF-8"/>
</head>
<body>


<div>
  <form name='Frecherche' method='POST' action=''>
        <p>
        <label>Valeur recherché </label><input type='text' name='Valeur'/>
        </p>
        <p>
        <input type='submit' name='envoyer' value='envoyer'/>
        </P> 
        </form>

</div>
   
<?php
$rech=$_POST['Valeur'];


//echo $rech;


echo "<div>";
//bouton rafraichir
echo "<button class='btn' onclick='document.location.reload(false)'>Relancer</button>";
//initialisation du tableau
$tableau= array(11=>rand(1,10),12=>rand(1,10),13=>rand(1,10),14=>rand(1,10),15=>rand(1,10),16=>rand(1,10),17=>rand(1,10),18=>rand(1,10),19=>rand(1,10),20=>rand(1,10));
/*
$tableau =array();
for ($i=0; $i<10;$i++){
    array_push($tableau,=>rand(1,10));
}*/

sort($tableau);

//tableau initial des valeur aléatoire
echo "<table border='2'><thead><tr><th>clé</th><th>nb aléa</th></tr></thead><tbody>";
foreach ($tableau as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</tbody></table>";
echo "</div>";


function recherche($rech, $tableau){
    //$compt=1;
    $a=0;
    $b=count($tableau)-1;
        while ($a<$b) {
            $milieu=($a+$b)/2;
            if ($tableau[$milieu] == $rech){
                return $milieu;
            }
            else if ($tableau[$milieu] > $rech) {
                $b = $milieu-1;
            }
            else {$a = $milieu+1;}
            //$compt++;
        };
        if ($a==$rech){
            return $rech;
        }
        else {
            $a=-1;
        };

    };


echo "\$rech vaut : ".$rech;
echo "<br>position de la recherche :".floor(recherche($rech, $tableau));
 

?>





</body>
</html>