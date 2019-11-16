<?php
$sexe =$_POST['genre'];
$age=$_POST['age'];

//echo $age." ".$sexe;


if ($sexe == "Homme" && $age>=20) {
    echo "Chère Zorglubien, vous êtes imposable !";
}
else if ($sexe == "Femme" && $age>=18 && $age<=35) {
    $difAge = 35 - $age;
    echo "Chère Zorglubienne, vous êtes imposable  pendant encore ".$difAge." ans !";
}
else if ($sexe == "Femme") {
    echo "Chère Zorglubienne, vous n'êtes pas imposable !";
}
else {
    $difAge = 20 - $age;
    echo "Chère Zorglubien, vous n'êtes pas imposable pendant encore".$difAge." ans !";
}




?>