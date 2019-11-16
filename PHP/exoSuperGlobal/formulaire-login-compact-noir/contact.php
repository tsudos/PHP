
<?php
// On démarre la session AVANT d'écrire du code HTML
// session_start();
session_start();
$nom=$_POST['login'];
$mdp=$_POST['password'];
?>


<!DOCTYPE html >
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Accès réservé au site</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
<body>

<?php

require_once('fn.database.php');

$connexion = getPDO();

$contact = recupContact($connexion, $nom);


//et que le nom et mdp sont dans le tableau contact
if (isset($nom) && !empty($nom)&& ($contact['nom']==$nom) && ($contact['mdp']==$mdp)) {
	
  $_SESSION['nom']=$contact['nom'];
  $_SESSION['mdp']=$contact['mdp'];
  $_SESSION['email']=$contact['email'];
  $_SESSION['prenom']=$contact['prenom'];
  


echo  'Bonjour  '.$nom.'<br/>';


?>
  <h3>Accès au site mapage !</h3>
  <br><br>
  <p>
        <a href="mapage.php">Lien vers mapage.php</a><br />
        <a href="index.html">Lien vers  le formulaire</a><br />
        </p>
 <?php 
}
else  {
  ?><h3>Accès au site mapage réservé !</h3><br><br>
  <p>Utilisateur ou information inconnu !</p>

  <a href="index.html">Lien vers  le formulaire</a><br />
  
  <?php
}
?>
</body>
</html>
	 



 

 
 

   
