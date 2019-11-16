<?php
function bool($val) :string
{

$res = "TRUE";
if ($val)          $res = "TRUE" ;
else  $res = "FALSE" ;
return  $res."<br/>";

/*
$res = ( $val ? 1 : 0 ) ;
return  $res."<br/>";

*/
}
//********************
$a="0";
echo "\$a vaut : ".bool($a);
echo "<br/>";
$b="TRUE";
echo "\$b vaut : ".bool($b);
echo "<br/>";
$c=FALSE;
echo "\$c vaut : ". bool($c);
echo "<br/>";
$d=($a OR $b);
echo "\$d vaut : ".bool ($d);
echo "<br/>";
$e=($a AND $c);
echo "\$e vaut : ".bool($e);
echo "<br/>";
$f=($a XOR $b);
echo "\$f vaut : ".bool($f);
echo "<br/>";
?>