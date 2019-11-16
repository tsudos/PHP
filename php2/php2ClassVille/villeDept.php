<?php
//nouvelle instance
    $message = "Erreur : manque de données";
    

        //inclure la class
    include_once('ville.class.php');
    require_once('villeConst.class.php');

        //par constructeur
    $Bordeaux = new VilleConst("Bordeaux","Girondes");

        //par getter/setter
    $marseille = new Ville();
    $marseille-> nom = "Marseille";
    $marseille-> departement = "Bouche-du-Rhône";

        //set arguments-definir arguments
    if (!empty($_POST['ville1']) && !empty($_POST['deptVille1']) && !empty($_POST['ville2']) && !empty($_POST['deptVille2'])) {
        $ville = new Ville();
        $ville2 = new Ville();

        $ville->setNom($_POST['ville1']);
        $ville->setDept($_POST['deptVille1']);
        $ville2->setNom($_POST['ville2']);
        $ville2->setDept($_POST['deptVille2']);

    } else {
    echo $message;
  }
  // get Arguments
?>
<!doctype html>
<html>
    <head>
        <title>Ville/Département</title>

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
        <div class="">
            <h1>Ville/Département</h1>
        
            <p>
            <?php
                if ((!empty($_POST['ville1']))&& (!empty($_POST['deptVille1']))) {
                    echo $ville->getNom() . ' est dans le département '.$ville->getDept();
                } 
                else {
                    echo "messing data";
                } 
                ?>
            </p>
            <br>
            <p>
                <?php
                if ((!empty($_POST['ville2'])) && (!empty($_POST['deptVille2']))) {
                    echo "La ville ".$ville2->getNom() . ' est dans le département '.$ville2->getDept();
                } 
                else {
                    echo "messing data";
                }
                ?>
                <br>on vient de passer par des getter/setter par un formulaire
            </p>
            <br>
            <p>
                <?php
                echo 'alors que '.$marseille->getInfos().' (par getInfo)';
                ?>
            </p>
            <br>
            <p>
                <?php
                echo $Bordeaux->getInfo();
                ?>
            </p>

        </div>
    </body>
</html>
