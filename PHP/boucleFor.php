<!doctype html>
<html>
<head>
<title>Multiplication</title>

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
    <h1>TABLE DE MULTIPLICATION</h1>

<!--metohd post plus securiser que GET -->
<form name="Fmulti" method="POST" action=''>
    <fieldset>
            <p>
                    <label>Valeur à multiplier : </label><input type="text" name="A" placeholder="Valeur de A"/>
            </p>
        
            <p>
                <input type="submit" name="envoyer" value="envoyer"/>
            </P>        
    </fieldset>
 

    <?php

 /*   
if (!empty($_POST['A'])){
    $multiplicateur = $_POST['A'];

for ($i=1; $i<=10;$i++){
    echo $multiplicateur." x ".$i." = ".($multiplicateur*$i)."<br>";
}
}
*/
echo "<table border='1'><caption>Table de multiplication</caption><br>
<thead><tr><th>Multiplicateur</th><th>indice</th><th>produit</th></tr></thead><tbody>";


$multiplicateur = $_POST['A'];

for ($i=1; $i<=10;$i++){
    $result=$multiplicateur*$i;
    echo "<tr><td>$multiplicateur</td><td>$i</td><td>$result</td></tr>";
}




echo "</tbody>
</table>";
?>




</form>