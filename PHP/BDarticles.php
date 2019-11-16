
<?php 
//appel de la fonction pour une fois (once)
include_once('connexionBDArticles.php');

//recuperation par ligne de commande MySQL
    $reponse = $connexion->query('SELECT id,titre,contenu FROM articles');


//affichage des données recuperée
/*
foreach ($reponse as $key => $value) {
    echo 
}*/
    while ($data = $reponse->fetch())
    {
        echo $data['id']." : ".$data['titre']."<br>".$data['contenu']."<br><br>";

    }

?>
</body>

</html>