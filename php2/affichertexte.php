<!doctype html>
<html>
<head>
    <title>php perfectionnement 1 document</title>

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
if (!$fp = fopen("texte.txt","r")){
    echo " Echec de l'ouverture du document";}
else { $Fichier="";
    while(!feof($fp)){
        //on recupere une ligne tant quil y a qlq chose (!feof)
        $Ligne=fgets($fp, 255);
        // on affiche la ligne
        echo $Ligne."<br>";
        //on stocke l'ensemble des lignes dans une variable globale .=
        $Fichier .= $Ligne."<br>";
    }
    fclose($fp); // on ferme le fichier
}

for ($i=1; $i<=5; $i++){
echo "<br>".$Fichier;
}
?>



</body>
</html>


