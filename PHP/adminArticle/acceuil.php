<!doctype html>
<html>
<head>
    <title>Liste des articles</title>

  
     <link rel="stylesheet" type="text/css" href="css.css">  
  
    <meta charset="UTF-8"/>
</head>
<body>
<h1>Les articles</h1>

     
 
<?php
    require_once('fn.database.php');
        

    $connexion = getPDO();

    $result = recupBillet($connexion);


    foreach ($result as $key => $value) {?>
        <div class="news">
            <h3><?php echo  htmlspecialchars($value['Titre']." ".$value['date_redaction']);?></h3>
            <?php
            $rest = substr($value['contenu'], 0, 300);
            ?>

            <p><?php echo nl2br(htmlspecialchars($rest)."<br><br>")?><a href="afficherArticle.php?articles=<?php echo $value['id_article'];?>">article complet</a></p>
                <!--"commentaires.php?billet="<"?php echo $value['id_billet'];?">"" permet de faire passer par un GET l'id billet -->
                <!--nl2br(htmlspecialchars ou "nl2br" permet de convertir les retours à la ligne en balises HTML
                    et "htmlspecialchars" permet de sécurisé les texte et les titres -->
        </div>
        
        

        
        
        
        
        <?php
        
        
    }

    
?>

<h1><div>
        <a href="connexion.php"><input type="button" class="btn"  value="CONNECTION" ></a>
        <a href="inscription.php"><input type="button" class="btn" value="INSCRIPTION"></a>

        </div>
        </h1>



</body>
</html>