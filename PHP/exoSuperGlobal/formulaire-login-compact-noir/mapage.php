<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['email']) ) {
    ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
 
    <h2>MAPAGE !</h2>
    <p>
        <strong>Salut</strong> <?php echo  'Bonjour' .$_SESSION['prenom'].'   '.$_SESSION['nom'].'  email :  ' .$_SESSION['email']. ' .!<br />'; ?>
        
        Tu es à la page mapage

    </p>
  
    <p>
        <a href="index.html">Lien vers  le formulaire</a><br />
    </p>
 
    </body>
</html>
<?php
}
?>