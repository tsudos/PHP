<!doctype html>
<html>
<head>
<title>Comparaison</title>
<meta >
<meta charset="UTF-8"/>
</head>

<body>
    <h1>test de comparaison</h1>

<!--metohd post plus securiser que GET-->   
<form name="Fcompare" method="POST" action=''>
    <fieldset>
        <legend>Valeur à comparer</legend>

            <p>
                    <label>A : </label><input type="text" name="A" placeholder="Valeur de A"/>
            </p>
            <p>
                    <label>B : </label><input type="text" name="B" placeholder="Valeur de B"/>
            </p>
        
            <p>
                <input type="submit" name="envoyer" value="envoyer"/>
            </P>        
    </fieldset>


    <?php



$A =$_POST['A'];
$B=$_POST['B'];

$compare = $A<=>$B;
$string ="ERREUR SYSTEME <br/>";
//echo $A." ".$B." ".$compare." ".$string;

//(!empty($A)) veux dire non null donc pour tester si un champ n'est pas remplis
//!(($A+$B+$C+$D)>100)) reviens à ecrire (($A+$B+$C+$D)<=100))
if($compare==-1){
    $string=" est plus petit que ";
    echo $A.$string.$B."<br>";
} 
else if ($compare==0) {
    $string=" est égale à ";
    echo $A.$string.$B."<br>";
    }
else if ($compare==1) {
    $string=" est plus grand que ";
    echo $A.$string.$B."<br>";
    }

?>




</form>