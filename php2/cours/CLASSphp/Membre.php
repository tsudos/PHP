<?php
// New instance
  $message = "ERROR : Manque des données";

  include_once('membre.class.php');
  $membre = new Membre();

// set Arguments
if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['signature']) && !empty($_POST['actif'])) {
  $membre->setPseudo($_POST['pseudo']);
  $membre->setEmail($_POST['email']);
  $membre->setSignature($_POST['signature']);
  $membre->setActif($_POST['actif']);
} else {
  echo $message;
}

  // get Arguments
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <title>Get Details</title>
  </head>
  <body>
    <h1>All your details</h1>
    <div class="">
      <p>
      <?php
          if (!empty($_POST['pseudo'])) {
            echo $membre->getPseudo() . ' est ton mon pseudo !';
          } else {
            echo "messing data";
          }
        ?>
      </p>
      <br>
      <p>
        <?php
          if (!empty($_POST['email'])) {
          echo $membre->getEmail() . ' est ton Email !';
          } else {
            echo "messing data";
          }
        ?>
      </p>
      <br>
      <p>
      <?php
        if (!empty($_POST['signature'])) {
        echo $membre->getSignature() . ' est ta signature !';
        } else {
          echo "messing data";
        }
      ?>
      </p>
      <br>
      <p>
        <?php if (!empty($_POST['actif'])) {
          echo 'Tu sera actif pendant ' . $membre->getActif() . ' jours';
        } else {
          echo "messing data";
        }
        ?>
      </p>
      <br>
    </div>
  </body>
</html>
