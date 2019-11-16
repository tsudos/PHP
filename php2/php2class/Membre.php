<?php
//nouvelle instance
    $message = "Erreur : manque de données";

    //inclure la class
    include_once('membre.class.php');
    /*1 $membre = new Membre();*/

//set arguments-definir arguments
if (!empty($_POST['Nom']) && !empty($_POST['Prénom']) && !empty($_POST['Age']) && !empty($_POST['Email'])) {
    $membre = new Membre($_POST['Nom'],$_POST['Prénom'],$_POST['Age'],$_POST['Email']);
    /*1 $membre->setNom($_POST['Nom']);
    $membre->setPrenom($_POST['Prénom']);
    $membre->setAge($_POST['Age']);
    $membre->setEmail($_POST['Email']); */
  } else {
    echo $message;
  }
  // get Arguments
?>
<!doctype html>
<html>
<head>
    <title>Formulaire pour créer des Membres</title>

    <style type="text/css">
        body{
                background-color: #444444;
                color : white;
                font-size:20px;
            }

        .btn {
            text-decoration: none;
            padding: 9px;
            font-family: tahoma;
            font-size: 0.5em;
            color: #0c0c0c;
            background-color: #d8d8d8;
            border-radius: 11px;
            -webkit-border-radius: 11px;
            -moz-border-radius: 11px;
            border: 3px groove #a5a5a5;
            box-shadow: 3px 3px 12px #95b3d7;
            -webkit-box-shadow: 3px 3px 12px #95b3d7;
            -moz-box-shadow: 3px 3px 12px #95b3d7;
        }


        .btn:hover {
            padding: 10px;
            font-size: 0.6em;
            background-color: #548dd4;
            border: 3px solid #0f243e;
            box-shadow: -3px -3px 12px #95b3d7;
            -webkit-box-shadow: -3px -3px 12px #95b3d7;
            -moz-box-shadow: -3px -3px 12px #95b3d7;
        }

    </style>
    <meta charset="UTF-8"/>
</head>
<body>
    <h1>Détails du membre</h1>
    <div class="">
      <p>
      <?php
          if (!empty($_POST['Nom'])) {
            echo $membre->getNom() . ' est ton Nom !';
          } else {
            echo "messing data";
          }
        ?>
      </p>
      <br>
      <p>
        <?php
          if (!empty($_POST['Prénom'])) {
          echo $membre->getPrenom() . ' est ton Prénom !';
          } else {
            echo "messing data";
          }
        ?>
      </p>
      <br>
      <p>
      <?php
        if (!empty($_POST['Age'])) {
        echo 'Tu as '.$membre->getAge() . ' ans !';
        } else {
          echo "messing data";
        }
      ?>
      </p>
      <br>
      <p>
        <?php if (!empty($_POST['Email'])) {
          echo 'ton email est ' . $membre->getEmail();
        } else {
          echo "messing data";
        }
        ?>
      </p>
      <br>
    </div>
  </body>
</html>
