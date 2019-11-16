<?php
require_once('personne.class.php');
?>

<!doctype html>
<html>
    <head>
        <title>Personne</title>

        <meta charset="UTF-8"/>
    </head>
    <body>
        <div class="">
            <h1>Ville/Département</h1>

            <p>
                <?php
                echo "avant le unset : ";
                $humain = new Personne("toto","Tata","sur la LUNE");
                echo $humain->getInfo();
                ?>
            </p>
            <p>Changement d'adresse :</p>
            <p>
                <?php
                $humain->setAdresse("Et maintenant sur MARS :-)");
                echo $humain->getInfo();
                ?>
            </p>
            
            <p>
                <?php
                    unset($humain);
                    
                    echo "apres le unset :";
                    if (!isset($humain)){
                        echo 'ToTo tAtA a disparu';
                    }
                    else {
                        $humain->getInfo(); 
                    } 
                ?>
            </p>

        </div>
    </body>
</html>