<!DOCTYPE innerHTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Machine à sous</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css" />  
    <script language="javascript" type="text/javascript">

    
    </script>
    </head>
    <body>
        <img src="../image/logo.jpg" width="600" height="100">
        <h1> Atelier 2-3 / php  </h1>

        <div id="page">
        <div > 
                <p>Vous avez gagné : <span>
                <?php
               if (isset($_GET['jeu'])) {
                    $gain = rand(1,100000);
                    echo $gain;
                }
                else { echo 'rien';}
                ?>
                </span>
            </p>
        </div>
            <div class="formulaire">
                <form  method="get" action="index1.php">      
                    <input name="jeu" type="submit"  value="GAIN" class="btn"/>
                </form>
            </div>
        </div>

    </body>
</html>
