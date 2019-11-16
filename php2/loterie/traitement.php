<!doctype html>
<html>
<head>
    <title>Loterie</title>

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
    $nb =$_POST['numéro'];
    if (!$fp =fopen("numeroGagnant.txt", "r+")){
        echo " Echec de l'ouverture du document";}

    else {
       ?>
      <script type="text/javascript">d=new Date(); document.write("Loterie du  : <span style='color:#a5a5a5;'>");   document.write(d.toLocaleDateString());   document.write("</span><br>"); </script> 
       <?php 
            $Ligne=fread($fp, 5);

    
    //echo $Ligne.' '.$nb;

    if($Ligne==$nb){
        echo "Bravissimo !!";
    }
    else{ echo "Dommmmmmmageeee !";}

    fclose($fp); // on ferme le fichier
    }

?>
<form name="Retour" action="Loterie.html" method="post">
<input type="submit" value="Retour">
</form>


</body>
</html>