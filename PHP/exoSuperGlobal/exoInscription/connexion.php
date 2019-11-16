
<?php
session_start();
  $pseudo=$_POST['login'];
  $mdp=md5($_POST['password']);
?>

<?php
require_once('config.php');
require_once('fn.database.php');
$connexion = getPDO($config);

$contact = recupContact($connexion, $pseudo);


//et que le nom et mdp sont dans le tableau contact
if (isset($pseudo) && !empty($pseudo)&& ($contact['pseudo']==$pseudo) && ($contact['mdp']==$mdp)) {
	
  $_SESSION['pseudo']=$contact['pseudo'];
  $_SESSION['mdp']=md5($contact['mdp']);
  $_SESSION['email']=$contact['email'];
  $_SESSION['prenom']=$contact['prenom'];
  $_SESSION['nom']=$contact['nom'];


echo  'Bonjour  '.$_SESSION['prenom']." alias ".$_SESSION['pseudo'].'<br/>';


?>
  <h3>Accès au site mapage !</h3>
  <br><br>
  <p>
        <a href="espaceMembre.php">Lien vers espace Membre</a><br />
        <a href="acceuil.php">Lien vers  le formulaire</a><br />
        </p>
 <?php 
}
else {
  ?><h3>Accès au site mapage réservé !</h3><br><br>
  <p>Utilisateur ou information inconnu !</p>

  <a href="acceuil.php">Lien vers le formulaire pour s'inscrire</a><br />
  
  <?php
}

?>
</body>
</html>
