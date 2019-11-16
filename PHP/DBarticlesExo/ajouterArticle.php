<?php
$titre=$_POST['titre'];
$article=$_POST['article'];

require('AccesDBArticles.php');

//ajouter un article
$req = $connexion->prepare('INSERT INTO articles (titre, contenu) VALUES (:t,:c)');
$req->execute(array('t'=> $titre, 'c' => $article));

echo "Article ajouté!";

echo '<button name="afficher" onclick="afficherArticles.php"> Afficher les articles </button>';






?>