<?php
session_start();
$id_get=$_GET['articles'];
?>

<!doctype html>
<html>
<head>
    <title>Article détail</title>

    <link rel="stylesheet" type="text/css" href="css.css">  
    
    <meta charset="UTF-8"/>
</head>
<body>


 	   
<?php
    require_once('fn.database.php');
    require_once('config.php');
    $connexion = getPDO();

    //recup billet choisi
 
    $billet = recupBilletComplet($connexion, $id_get);
?>
        <div class="news">
        <h3><?php echo  $billet['Titre']." ".$billet['date_redaction'];?></h3>

        <p><?php echo $billet['contenu']."<br>"?></p>
        </div>
        <p><br><a href="acceuil.php" class="btn">retour à la liste des billets</a></p>

</body>
</html>