<!doctype html>
<html>
<head>
    <title>Blog - Liste commentaires</title>

    <link rel="stylesheet" type="text/css" href="css.css">  
    
    <meta charset="UTF-8"/>
</head>
<body>
<h1>Mon Super Blog!</h1>
<a href="index1.php" class="btn">retour à la liste des billets</a>
 	   
<?php
    require_once('fn.database.php');

    $id_get=$_GET['billet'];
    $connexion = getPDO();

    //recup billet choisi
 
    $billet = recupBilletCom($connexion, $id_get);
        ?>
        <div class="news">
        <h3><?php echo  $billet['titre']." ".$billet['date_creation']." ".$billet['auteur']."<br>";?></h3>

        <p><?php echo $billet['contenu']."<br>"?></p>
        </div>

<?php
    //recup commentaire associé
    $result = recupCom($connexion, $id_get);

    echo "<h2>Commentaires</h2><br><br>";
    //echo print_r($result);
     if (!empty($result)){
         while ($data = $result->fetch()){   
            ?>
                <div class="com">
                <p><?php echo  htmlspecialchars($data['auteur'])." : ".htmlspecialchars($data['date_commentaire'])."<br>".nl2br(htmlspecialchars($data['commentaire']))."<br><br>"?></p>
                </div>
            <?php
     }
    }
?>
</body>
</html>