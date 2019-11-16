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




<?php 



if (!$fp = fopen('connexions.txt', 'r')) {
    echo "erreur d'ouverture !";
    }

else { 
    // recuperation de la première ligne contenant le nombre de vues en format txt
    $string = fgets($fp); 
    
    //mise en format tableau
    $tabString = explode("/",$string);

    
    
    echo "moyenne des visites mensuelles".(round(((array_sum($tabString))/sizeof($tabString)),2));

} 




fclose($fp);
?> 







</body>
</html>