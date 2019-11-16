<?php
session_start();
  $pseudo=$_POST['login'];
  $nom=$_POST['name'];
  $prenom=$_POST['surname'];
  $email=$_POST['email'];
  $mdp=md5($_POST['password']);
  $confMdp=$_POST['confPassword'];
  $data = array('pseudo' => $pseudo,'nom'=> $nom,'prenom'=>$prenom,'email'=>$email,'mdp'=>$mdp,'confmdp'=>$confMdp);
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


$verif = comparaison($connexion);

$verifMail = compMail($connexion,$email);

if (empty($pseudo)
||empty($nom)
||empty($prenom)
||empty($email)
||empty($mdp)
){
  ?><h3>Vous avez oublié des données</h3><br><br>
  <p>désolé, je n'est pas utilisé javascript pour vous aider :-)</p>

  <a href="acceuil.php">retour vers le formulaire pour s'inscrire</a><br />
  
  <?php
}

if ($data['pseudo']===$verif['pseudo']){
  /* echo "verif pseudo<br>\$verif <br>";
  var_dump($verif);
  echo "<br>\$data <br>";
  var_dump($data); */
  ?><h3>Accès au site Mapage réservé !</h3><br><br>
  <p>pseudo déja utilisé</p>

  <a href="acceuil.php">retour vers le formulaire pour s'inscrire</a><br />
  
  <?php
}

else if ($data['email']===$verif['email']){
 /*  echo "verif mail<br>\$verif <br>";
  var_dump($verif);
  echo "<br>\$data <br>";
  var_dump($data); */
  
  ?><h3>Accès au site Mapage réservé !</h3><br><br>
  <p>e.Mail déja utilisé</p>

  <a href="acceuil.php">retour vers le formulaire pour s'inscrire</a><br />
  
  <?php
}
//et que le nom et mdp sont dans le tableau contact
else {
  $inscription = inscription($connexion, $nom,$prenom,$mdp,$email,$pseudo);
  $contact = recupContact($connexion, $pseudo);
}
//condition à verifier ? Inscription
if (isset($pseudo) && !empty($pseudo) && ($contact['pseudo']==$pseudo) && ($contact['mdp']==$mdp)) {
  echo "inscription<br>\$verif <br>";
  var_dump($verif);
  echo "<br>\$data <br>";
  var_dump($data['pseudo']);

  $_SESSION['pseudo']=$pseudo;
  $_SESSION['mdp']=$mdp;
  $_SESSION['email']=$email;
  $_SESSION['prenom']=$prenom;
  $_SESSION['nom']=$nom;



  echo  'Bienvenu  '.$_SESSION['prenom']." alias ".$_SESSION['pseudo'].'<br/>';

?>
  <h3>Accès au site mapage !</h3>
  <br><br>
  <p>
        <a href="espaceMembre.php">Inscription réussi - lien vers espace Membre</a><br />
        <a href="acceuil.php">Lien vers  le formulaire</a><br />
        </p>
 <?php 
}


else {
  echo "PB<br>\$verif <br>";
  var_dump($verif);
  echo "<br>\$data <br>";
  var_dump($data);
  ?><h3>Accès au site mapage réservé !</h3><br><br>
  <p>erreur d'inscription logarithmique, enfin du dev :-) </p>

  <a href="acceuil.php">retour vers le formulaire pour s'inscrire</a><br />
  
  <?php

}

?>
</body>
</html>
