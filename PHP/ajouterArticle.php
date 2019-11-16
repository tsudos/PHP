<!doctype html>
<html>
<head>
<title>Ajouter Article</title>
<meta >
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
</head>

<body>
   
    

<?php 
/*
//accès à la BD toujours sécurisé par un try 
try{
    //3 paramètres ('ciblage la base de donnée','utilisateur','mdp')
    $connexion = new PDO('mysql:host=localhost;dbname=BDarticles;charset=utf8','root','');
    echo"accès à la base de donnée : valide !<br>";
}
catch (exception $e)
{
die('erreur : '.$e->getMessage());
}*/

include_once('connexionBDArticles.php');

//ajouter un article
$req = $connexion->prepare('INSERT INTO articles (titre, contenu) VALUES (:t,:c)');
$req->execute(array('t'=> 'bouhou', 'c' => 'Halloween party time !!! Walibi POWAAAAAAAAAAAAAAAAA!!!'));

echo "Article ajouté!";




?>
</body>

</html>