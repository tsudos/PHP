<?php
session_start();
  $nom=$_POST['name'];
  $mdp=md5($_POST['password']);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>QUI ?</title>
<meta name="connexion" content="formulaire d'indentification compact + bouton validation int�gr�" />
<link rel="stylesheet" type="text/css" href="css.css" />
<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
</head>
<body>




<?php

//connection si id_status  1 redir-> administration  / si 2 redir-> ajoutArticle


require_once('config.php');
require_once('fn.database.php');
$connexion = getPDO($config);

$contact = recupContact($connexion, $nom);


//et que le nom et mdp sont dans le tableau contact
if (isset($nom) && !empty($nom)&& ($contact['nom']==$nom) && ($contact['mdp']==$mdp)) {
	
  $_SESSION['mdp']=$mdp;
  $_SESSION['email']=$contact['email'];
  $_SESSION['prenom']=$contact['prenom'];
  $_SESSION['nom']=$nom;
  $_SESSION['id_statut']=$contact['id_statut'];


    echo  '<h1>Bonjour  '.$_SESSION['prenom']." alias ".$_SESSION['nom'].'</h1><br/>';
        if ($_SESSION['id_statut']==1){
            echo '<h3><a href="administration.php"><input type="button" class="btn" value="Administration"></a>';
            echo '<h3><a href="ajoutArticle.php"><input type="button" class="btn" value="Pour ecrire un article"></a>';
        }
        else if ($_SESSION['id_statut']==2){
            echo '<h3><a href="ajoutArticle.php"><input type="button" class="btn" value="Pour ecrire un article"></a>';
        }
        else {echo "<h1> Hacking System !!</h1>";
        }
    }
else {
  ?><h3>Accès au site mapage réservé !</h3><br><br>
  <p>Utilisateur ou information inconnu !</p>
 <?php var_dump($contact)?>

<h3>
  <a href="connexion.php"><input type="button" class="btn" value=" RETOUR CONNEXION"></a>
  <a href="inscription.php"><input type="button" class="btn" value=" Inscription"></a>
</h3>  
  
  <?php
}

?>

</body>
</html>