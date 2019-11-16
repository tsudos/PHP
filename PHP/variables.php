<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variable</title>
<style type="text/css">
</style>

</head>

<body>


<?php echo "l'étudiant<br/>";
//si simple ' alors  l\'etudiant'?>

<?php echo 'l\'étudiant<br/>';
$prénom="Stéphane";

echo "<strong> $prénom </strong><br/>";
//si simple cote pour variable il fera une erreur
echo '<strong> $prénom qui aurai du etre Stéphane </strong><br/>';
echo "<strong> \$prénom : $prénom</strong><br/>";
//echo "mes "supers" amis<br/>";
echo "mes \"supers\" amis<br/>";



/*
define(PI, 3.14);
define(prénom, 'Delphine');
define doit etre remplacé par const
*/

const prénom = "Delphine";  
const PI= 3.14;
//on ne met pas de $ pour appeler  une contante
echo "PI = ".PI."<br/> Prénom : ".prénom;


?>





</body>

</html>