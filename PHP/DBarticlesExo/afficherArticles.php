<!doctype html>
<html>
<head>
<title>Afficher Article</title>
<meta >
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
</head>

<body>
   
    

<?php 

require('AccesDBArticles.php');
require('config.php');
require('fn.articles.php');

//recuperation par ligne de commande MySQL
    $reponse = $connexion->query('SELECT id,titre,contenu FROM articles');


//affichage des données recuperée
    while ($data = $reponse->fetch())
    {
        //echo $data['id']." : ".$data['titre']."<br>".$data['contenu']."<br><br>";
        echo nl2br(htmlspecialchars($data['question']))."<br>";
        echo nl2br(htmlspecialchars($data['answer']))."<br>";
    }


?>
</body>

</html>