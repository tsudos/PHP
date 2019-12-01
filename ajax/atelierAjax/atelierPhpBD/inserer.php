<?php

header("Content-Type: text/html; charset=UTF-8");
$conn = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '');
if (isset($_POST['nom']) && isset($_POST['prenom']))
{
    if (!empty($_POST['nom']) && !empty($_POST['prenom'])){
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $req = $conn->prepare("INSERT INTO client(nom,prenom) VALUES(:n, :p)");
    $req->execute(array('n' => $nom, 'p' => $prenom));
    }
$reponse = $conn ->query('SELECT * FROM client ORDER BY id DESC LIMIT 0,10');
while ($val = $reponse->fetch())
{
echo '<p><strong">'.htmlentities(stripslashes($val['nom'])).' : '. htmlentities(stripslashes($val['prenom'])) .'</p>';
}
}
else {echo "pb";}
?>