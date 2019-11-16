<!doctype html>
<html>
<head>
    <title>PAIR IMPAIR</title>

    <meta charset="UTF-8"/>
    <style type="text/css">

    table{
        border: 4px ridge rgba(163, 163, 163, 0.747);
        border-radius:20px 20px 0px 0px;
    }


    tbody tr:nth-child(2n){
        background-color:black;
        color: yellow;
        text-align: center;
    }
    tbody tr:nth-child(2n+1){
        background-color:yellow;
        color: black;
        text-align: center;
        
    }

    thead tr th:first-child {
        background-color:red;
        color: black;
        padding:20px;
        text-align: center;
        border-radius:15px 0px 0px 0px;
    }
    thead tr th:last-child {
        background-color:red;
        color: black;
        padding:20px;
        text-align: center;
        border-radius:0px 15px 0px 0px;
    }
    thead tr th{
        background-color:red;
        color: black;
        padding:20px;
        text-align: center;
    }

    </style>
</head>

<body>
    <h1>PAIR IMPAIR</h1>


<form name="FPI" method="POST" action=''>
    <fieldset>
            <p>
                    <label>Valeur à Vérifier : </label><input type="text" name="chiffre" placeholder="Valeur à vérifier"/>
            </p>
        
            <p>
                <input type="submit" name="envoyer" value="envoyer"/>
            </P>        
    </fieldset>
 

    <?php

   
if (!empty($_POST['chiffre'])){
    $valeur2 = $_POST['chiffre'];
    $modulo = $valeur2%2;
    $total=0;
    $valeurS = $_POST['chiffre'];
    
    if ($modulo==1){
        echo "$valeur2 est un chiffre impaire !<br>";
    }
    else if($modulo==0){
        echo "$valeur2 est un chiffre paire !<br>";
    }

    for ($i=1;$i<=10;$i++){
        $valeur2+=2;
        echo "$valeur2<br>";
    }

    echo"<br><br><br>";

    for ($i=1;$i<=$valeurS;$i++){
        $total=$total+$i;
    }
    echo "La somme des entiers jusqu'à $valeurS est : $total<br>";


}
else {echo "Vous avez oublié de rentrer votre chiffre";}








?>




</form>