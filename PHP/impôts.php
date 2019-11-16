<?php 
$age = $_POST['age'];
$revAnnuel = $_POST['revenue'];
//$_POST car on a utilisé method="post" sino,n $_GET

echo "INFORMATIONS : <br/>";
echo "Votre age : $age<br/>";
echo "Revenue Annuel pris en compte : $revAnnuel<br/>";

if ($age>=  18  && $revAnnuel >=20000) {
    echo "vous êtes donc imposable <br/>";
}
else if ($age>=16 && $age<  18  &&  $revAnnuel >=15000){
    echo "vous êtes donc imposable <br/>";
}
else {
    echo "vous n'êtes donc pas imposable <br/>";
}
?>