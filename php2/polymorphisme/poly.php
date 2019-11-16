<!doctype html>
<html>
    <head>
        <title>Ville</title>

        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class="">
            <h1>Ville/Département</h1>

            <p>
                <?php
                require_once("poly.class.php");
                $ville = new Ville();
                $ville->nom = "Bordeaux";
                $ville->depart = "33";
                //Récupération des valeurs
                echo "La ville de <strong>".$ville->nom."</strong> est dans le <strong>".$ville->depart;
                ?>
            </p>
            


        </div>
    </body>
</html>