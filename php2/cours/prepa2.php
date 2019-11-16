
<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
if ( !empty($nom) &&  !empty($prenom) && !empty($email)) {
$ressource = fopen('assed2.txt', 'a');

if (!$ressource) { //vérifie si le fichier est bien ouvert
echo "Impossible d'ouvrir le fichier fichier.txt";
}
else {
    fputs($ressource,$nom."|".$prenom."|".$email);
    fputs($ressource,"\n");
}
echo "welcome";
fclose($ressource);
}

?>