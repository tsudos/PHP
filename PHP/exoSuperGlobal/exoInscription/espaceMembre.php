<?php
session_start();

if (isset($_SESSION['nom']) &&
    isset($_SESSION['prenom']) &&
    isset($_SESSION['email']) &&
    isset($_SESSION['pseudo'])) {
 
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
        <strong>Salut <?php echo  ' à toi ' .$_SESSION['prenom'].'   '.$_SESSION['nom'].'<br>'.$_SESSION['pseudo'].' tu utilises comme email : '.$_SESSION['email']. ' .!<br />'; ?>
        </strong>
        <h3>Tu es sur le site : Mapage!</h3>

    </p> 
 
    </body>
</html>
<?php
}
else {
    echo "ERREUR SYSTEME !";
}
?>