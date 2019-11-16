<!doctype html>
<html>
    <head>
        <title>Ville</title>

        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class="">
            <h1>Ville/Département/quartier</h1>

            <p>
                <?php
                require_once('quartier.class.php'); 
                $ville = new Quartier("Bordeaux","33",'La Bastide',14500);
                echo $ville->getInfo();
                ?>
            </p>
            <p>
                <?php
                $ville2 = new Ville("Lyon",69);
                echo $ville2->getInfo();
                ?>
            </p>
            


        </div>
    </body>
</html>