<!doctype html>
<html>
<head>
<title>Exo PHP MySQL</title>
<meta >
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
</head>

<body>

<form action='' method="POST" name="FaddModele">
    <fieldset> 
    <table>
        <tr><td>code du type (id_modele) :</td><td><input type="text" name="id_modele" placeholder="lettre et chiffre"></td></tr>
 	    <tr><td>marque et modele :</td><td><input type="text" name="modele" placeholder=" marque et modele"></td></tr>
        <tr><td>Carburant :</td><td>
            <select name="carburant" id="carburant">
                <option value="Essence">Essence</option>
                <option value="Diesel">Diesel</option>
                <option value="Electrique">Electrique</option>
                <option value="GPL">GPL</option>
            </select>

 	</table>
 	    <input type="submit" value="Ajouté véhicule" name="ajouté M">
    </fieldset>    
</form> 



<!--
<form action='' method="POST" name="FaddProprio">
    <fieldset> 
    <table>
        <tr><td>Nom :</td><td>
            <input type="text" name="Nom"></td></tr>
 	    <tr><td>prénom :</td><td>
             <input type="text" name="prenom" ></td></tr>
        <tr><td>adresse :</td><td>
            <input type="text" name="adresse" ></td></tr>
        <tr><td>ville :</td><td>
            <input type="text" name="ville" ></td></tr>
        <tr><td>code postale :</td><td>
            <input type="text" name="postale" ></td></tr>
 	</table>
 	    <input type="submit" value="Ajouté Propriétaire" name="ajouté P">
    </fieldset>    
</form> 
-->

<?php 
/*
//ajout propriétaire
    if(isset($_POST['Nom'])&&isset($_POST['prenom'])&&isset($_POST['adresse'])&&isset($_POST['ville'])&&isset($_POST['postale']))

    {

        if(!empty($_POST['Nom'])&&!empty($_POST['prenom'])&&!empty($_POST['adresse'])&&!empty($_POST['ville'])&&!empty($_POST['postale']))
        {

        $dataP = array(

            'nom'=>$_POST['Nom'],
            'prenom'=>$_POST['prenom'],
            'adresse'=>$_POST['adresse'],
            'ville'=>$_POST['ville'],
            'postale'=>$_POST['postale'],
        );

        //appel de config.php et de fn_dbase
        require_once('config.php');
        require_once('fn_dbase.php');

        //on ce connecte en utilisant les parametre de config
        $connexion = getPDO($config);

        //on ajoute en ce connectant et en prenant de la data dansle tableau du formulaire
        $add = addP($connexion, $dataP);  

        //on recupere les result en ce connectant
        $result = showP($connexion);

?>

<table border='2'>
<tbody>


<?php    
    foreach ($result as $row){
            echo "<tr><td>".$row['id_pers']."</td>\n  
            <td>".$row['nom']."</td>\n
            <td>".$row['prenom']."</td>\n
            <td>".$row['adresse']."</td>\n
            <td>".$row['ville']."</td>\n
            <td>".$row['codepostal']."</td></tr>\n";
            
        }
    }   
}



?>
</table>
</tbody>
<!--fin de lajout de proprietaire-->





<!--ajout modele-->
<?php 
*/

//verification de si les champs sont remplis et qu'elle est declarée
if( isset($_POST['id_modele']) && isset($_POST['modele']) && isset($_POST['carburant']) )

{
	
if( !empty($_POST['id_modele']) && !empty($_POST['modele']) && !empty($_POST['carburant']))

{

 $dataM = array(
 
 'id_modele' =>$_POST['id_modele'],
 'modele' => $_POST['modele'],
 'carburant' => $_POST['carburant']
 );


    //appel de config.php et de fn_dbase
    require_once('config.php');
    require_once('fn_dbase.php');

    //appel des fonction 
    //attention à l'ordre si on veux mettre à jour la page où l'on ce trouve result apres add sinon faire F5


    //on ce connecte en utilisant les parametre de config
    $connexion = getPDO($config);

    //on ajoute en ce connectant et en prenant de la data
    $add = addM($connexion, $dataM);

    
    //on recupere les result en ce connectant
    $result = show($connexion);

    //affichage html et php

    ?>




<table border='2'>
    <legend>tableau de modèle</legend>
<tr> 
	<thead >
		<th> id_modele </th>
		<th> modele </th> 
		<th> carburant </th> 
	</thead>
</tr>
<tbody>

<?php

    //affichage des données recuperée
    //if(!$data)
        foreach($result as $row)
            {echo "<tr>
                    <td>".$row['id_modele']."</td>
                    <td>".$row['modele']."</td>
                    <td>".$row['carburant']."</td>
                    </tr>\n";}
?>
</tbody>
</table>

<?php
}
}
/*
    echo "<table border='2'><tbody>";
    foreach ($resultat->query($sql) as $row){
            echo "<tr><td>".$row['id_modele']." : </td>\n\n";  
            echo "<td>".$row['modele']."</td>\n";
            echo "<td>".$row['carburant']."</td></tr>\n"; 
            
        }
    echo "</table></tbody>";

*/
?>
</body>

</html>