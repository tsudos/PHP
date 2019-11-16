<?php
session_start();
  $nom=$_POST['name'];
  $prenom=$_POST['surname'];
  $email=$_POST['email'];
  $mdp=md5($_POST['password']);
  $confMdp=md5($_POST['confPassword']);
  $data = array('nom'=> $nom,'prenom'=>$prenom,'email'=>$email,'mdp'=>$mdp,'confmdp'=>$confMdp);
  var_dump($data);

?>


<!DOCTYPE html >
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Inscription au site</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
<body>

<?php
require_once('config.php');
require_once('fn.database.php');
$connexion = getPDO($config);

//$verif = comparaison($connexion);



if (empty($nom)
||empty($prenom)
||empty($email)
||empty($mdp)
){
  ?><h3>Vous avez oublié des données</h3><br><br>
  <p>désolé, je n'est pas utilisé javascript pour vous aider :-)</p>

  <a href="acceuil.php">retour vers le formulaire pour s'inscrire</a><br />
  
  <?php
}


$verifMail = compMail($connexion,$data['email']);

var_dump($verifMail);
if ($verif['email']===$data['email']){
    ?><h3>E.mail déja utilisé !</h3><br><br>
  
    <a href="acceuil.php">retour vers le formulaire pour s'inscrire</a><br /><?php
}

$verifNom = compMail($connexion,$data['nom']);

var_dump($verifNom);
if ($verif['nom']===$data['nom']){
    ?><h3>Nom d'utilisateur déja utilisé !</h3><br><br>
  
    <a href="acceuil.php">retour vers le formulaire pour s'inscrire</a><br /><?php
}





else ($verif===NULL)




?>