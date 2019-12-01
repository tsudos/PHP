<?php
function calcul(){
$val1 =$_POST['val1'];
$val2 =$_POST['val2'];

var_dump($val1);

if ($val1==0 || $val2==0){
    $resultat=0;
}
else {$resultat=$val1*$val2;}

return $resultat;}
?>