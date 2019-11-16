<!doctype html>
<html>
<head>
    <title>Blog - Liste billets</title>

  
     <link rel="stylesheet" type="text/css" href="css.css">  
  
    <meta charset="UTF-8"/>
</head>
<body>
<h1>Mon Super Blog!</h1>

     
 
<?php
    require_once('fn.database.php');

    $connexion = getPDO();

    $result = recupBillet($connexion);


    foreach ($result as $key => $value) {?>
        <div class="news">
            <h3><?php echo  htmlspecialchars($value['titre']." ".$value['date_creation']." ".$value['auteur']."<br>");?></h3>

            <p><?php echo nl2br(htmlspecialchars($value['contenu'])."<br><br>")?><a href="commentaires.php?billet=<?php echo $value['id_billet'];?>">Commentaires</a></p>
                <!--"commentaires.php?billet="<"?php echo $value['id_billet'];?">"" permet de faire passer par un GET l'id billet -->
                <!--nl2br(htmlspecialchars ou "nl2br" permet de convertir les retours à la ligne en balises HTML
                    et "htmlspecialchars" permet de sécurisé les texte et les titres -->
        </div>
        
        
        
        
        
        
        
        
        <?php
        
        
    }
?>





</body>
</html>