<!doctype html>
<html>
<head>
<title>Impôts</title>
<meta >
<meta charset="UTF-8"/>
</head>

<body>
    <h1>Form Impôts</h1>

<!--metohd post plus securiser que GET-->   
<form name="Fimpots" method="POST" action=''>
    <fieldset>
        <legend>Informations</legend>
        <p>
        <label>Age : </label><input type="text" name="age" placeholder="tapez votre age !"/>
        </p>
        <p>
        <label>Revenue Annuel : </label><input type="text" name="revenue" placeholder="rentrer votre revenue annuel !"/>
        </p>
        <p>
        <input type="submit" name="envoyer" value="envoyer"/>
        </P>        
    </fieldset>
</form>




<?php 
//pour charger appres remplissage de la page

    if(isset($_POST['age'])&&isset($_POST['revenue'])) {
        //(!empty) veux dire non null donc pour tester si un champ n'est pas remplis
        if(!empty($_POST['age']) && !empty($_POST['revenue'])){



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
    
        }
        //retour  si un champ n'est pas remplis
else{echo"un de vos champs n'est pas remplis";}
}
//fermeture de isset
?>

    



</body>

</html>