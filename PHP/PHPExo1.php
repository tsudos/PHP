<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exo J1 PHP</title>
</head>

<body>

    <?php 
    echo '<h1>Mes variables<br/></h1>';

//     echo "exo 1 <br/>";
//     //mavar = 0;
//     $mavar=1;
//     $var5=2;
//     $_mavar=3;
//     $_5var = 4;
//     $__élément1 = 5;
//     //$hotel4* = 6;

        
//         echo  $mavar;
//         echo  $var5;
//         echo $_mavar;
//         echo $_5var;
//         echo $__élément1."<br/><br/>";
//     ?>


// <?php

// echo "exo 2 <br/>";
// $x="PostgreSQL";
// echo $x."<br/>";

// $y="MySQL";
// echo $x."<br/>";
// echo $y."<br/>";
// //si on passe les valeur par adresse "&" ($y=&$x;) cad qu'on change toutes les valeurs  ou bien par affectation simple ($z=$x);
// $z=$x;
// echo $x."<br/>";
// echo $y."<br/>";
// echo $z."<br/>";
// $x="PHP 7";
// echo $x."<br/>";
// echo $y."<br/>";
// echo $z."<br/>";
// $y=&$x;
// echo $x."<br/>";
// echo $y."<br/>";
// echo $z."<br/>";

// /*déroulé du resultat exo 2

// PostgreSQL
// PostgreSQL
// MySQL
// PostgreSQL
// MySQL
// PostgreSQL
// PHP 7
// MySQL
// PostgreSQL
// PHP 7
// PHP 7
// PostgreSQL
// */


// echo "<p> exo 3</p>";

//     $x="PostgreSQL";
//     $y="MySQL";
//     $z=&$x;
//     $x="PHP 7";
//     $y=&$x;

//     Controle();

//     function Controle() {
//     echo "Affichage de controle : <br/>";

//     echo $GLOBALS['x'], "<br />";
//     echo $GLOBALS['y'], "<br />";
//     echo $GLOBALS['z'], "<br />";

//     }

//     /*resultat exo3


//     PHP 7
//     PHP 7
//     PHP 7
//     */


//     echo "<p>Exo 4</p> ";


//     echo "Version de PHP : ",PHP_VERSION, "<br />";
//     echo "Système d'exploitation du serveur : ",PHP_OS, "<br />";



//     /*resultat
//     Version de PHP : 7.2.14
//     Système d'exploitation du serveur : WINNT
//     */


// echo "<p>Exo 5</p>";


//     $x="PHP5";
//     echo "\$x vaut : $x et est de type ", gettype($x),"<br />";
//     echo "\$y vaut : $y et est de type ", gettype($y),"<br />";
//     echo "\$z vaut : $z et est de type ", gettype($z),"<br /><br />";
//     /*resultat
//     $x vaut : PHP5 et est de type string
//     $y vaut : PHP5 et est de type string
//     $z vaut : PHP5 et est de type string
//     */

//     $a[]=&$x;
//     echo "\$a[0] vaut : $a[0] et est de type ", gettype($a),"<br />";
//     echo "\$x vaut : $x et est de type ", gettype($x),"<br />";
//     echo "\$y vaut : $y et est de type ", gettype($y),"<br />";
//     echo "\$z vaut : $z et est de type ", gettype($z),"<br /><br />";
//     /*resultat
//     $a[0] vaut : PHP5 et est de type array
//     $x vaut : PHP5 et est de type string
//     $y vaut : PHP5 et est de type string
//     $z vaut : PHP5 et est de type string
//     */


//     $y=" 5 eme version de PHP";
//     echo "\$a[0] vaut : $a[0] et est de type ", gettype($a),"<br />";
//     echo "\$x vaut : $x et est de type ", gettype($x),"<br />";
//     echo "\$y vaut : $y et est de type ", gettype($y),"<br />";
//     echo "\$z vaut : $z et est de type ", gettype($z),"<br /><br />";
//     /* resultat
//     $a[0] vaut : 5 eme version de PHP et est de type array
//     $x vaut : 5 eme version de PHP et est de type string
//     $y vaut : 5 eme version de PHP et est de type string
//     $z vaut : 5 eme version de PHP et est de type string
//     */

//     $z=$y*10;
//     //retour d'erreur car l'on multiplie un string commencant par un nombre
//     echo "\$a[0] vaut : $a[0] et est de type ", gettype($a),"<br />";
//     echo "\$x vaut : $x et est de type ", gettype($x),"<br />";
//     echo "\$y vaut : $y et est de type ", gettype($y),"<br />";
//     echo "\$z vaut : $z et est de type ", gettype($z),"<br /><br />";
//     /* resultat
//     ( ! ) Notice: A non well formed numeric value encountered in C:\wamp64\www\php1_tsud_09_19\PHPExo1.php on line 131
//     Call Stack
//     #	Time	Memory	Function	Location
//     1	0.0008	404256	{main}( )	...\PHPExo1.php:0
//     $a[0] vaut : 50 et est de type array
//     $x vaut : 50 et est de type integer
//     $y vaut : 50 et est de type integer
//     $z vaut : 50 et est de type integer
//     */



//     $x.=$y;
//     echo "\$a[0] vaut : $a[0] et est de type ", gettype($a),"<br />";
//     echo "\$x vaut : $x et est de type ", gettype($x),"<br />";
//     echo "\$y vaut : $y et est de type ", gettype($y),"<br />";
//     echo "\$z vaut : $z et est de type ", gettype($z),"<br /><br />";
//     /*resultat
//     $a[0] vaut : 5050 et est de type array
//     $x vaut : 5050 et est de type string
//     $y vaut : 5050 et est de type string
//     $z vaut : 5050 et est de type string
//     */


//     $y*=$z;
//     //retour d'erreur car l'on multiplie un string commencant par un nombre
//     echo "\$a[0] vaut : $a[0] et est de type ", gettype($a),"<br />";
//     echo "\$x vaut : $x et est de type ", gettype($x),"<br />";
//     echo "\$y vaut : $y et est de type ", gettype($y),"<br />";
//     echo "\$z vaut : $z et est de type ", gettype($z),"<br /><br />";
//     /* resultat
//     $a[0] vaut : 25502500 et est de type array
//     $x vaut : 25502500 et est de type integer
//     $y vaut : 25502500 et est de type integer
//     $z vaut : 25502500 et est de type integer
//     */

//     $a[0]="MySQL";
//     //on met les {} pour demander une valeur dans un tableau mais on peux faire sans
//     echo "\$a[0] vaut : {$a[0]} et est de type ", gettype($a),"<br />";
//     echo "\$a[0] vaut : $a[0] et est de type ", gettype($a),"<br />";
//     echo "\$x vaut : $x et est de type ", gettype($x),"<br />";
//     echo "\$y vaut : $y et est de type ", gettype($y),"<br />";
//     echo "\$z vaut : $z et est de type ", gettype($z),"<br /><br />";
//     /*resultat
//     $a[0] vaut : MySQL et est de type array
//     $a[0] vaut : MySQL et est de type array
//     $x vaut : MySQL et est de type string
//     $y vaut : MySQL et est de type string
//     $z vaut : MySQL et est de type string
//     */


/*
echo "<p>Exo 6</p>";

    $x="7 personnes";
    echo $x."<br/>"."<br/>";


    $y=(integer) $x;
    echo $x."<br/>";
    echo $y."<br/>"."<br/>";


    $x="9E3";
    echo "\$x vaut : $x et est de type ", gettype($x),"<br />";
    echo $x."<br/>";
    echo $y."<br/>"."<br/>";

    $x="0,9E-3";
    echo "\$x vaut : $x et est de type ", gettype($x),"<br />";
    echo $x."<br/>";
    echo $y."<br/>"."<br/>";



    $z=(double) $x;
    echo $x."<br/>";
    echo $y."<br/>";
    echo $z."<br/>"."<br/>";

*/

echo "<p>Exo 7</p>";

function bool($val):string {
    $res ="TRUE";
    if($val)
    $res="TRUE";
    else $res="FALSE";
    return $res."<br/>";
    }


    $a="0";
    echo "\$a vaut : ".bool($a)."<br/>"."<br/>";
    $b="TRUE";
    echo "\$a vaut : ".bool($a)."<br/>";
    echo "\$b vaut : ".bool($b)."<br/>"."<br/>";
    $c=FALSE;
    echo "\$a vaut : ".bool($a)."<br/>";
    echo "\$b vaut : ".bool($b)."<br/>"."<br/>";
    echo "\$c vaut : ".bool($c)."<br/>";
    $d=($a OR $b);
    echo "\$a vaut : ".bool($a)."<br/>";
    echo "\$b vaut : ".bool($b)."<br/>"."<br/>";
    echo "\$c vaut : ".bool($c)."<br/>";
    echo "\$d vaut : ".bool($d)."<br/>";
    $e=($a AND $c);
    echo "\$a vaut : ".bool($a)."<br/>";
    echo "\$b vaut : ".bool($b)."<br/>"."<br/>";
    echo "\$c vaut : ".bool($c)."<br/>";
    echo "\$d vaut : ".bool($d)."<br/>";
    echo "\$e vaut : ".bool($e)."<br/>";
    $f=($a XOR $b);
    echo "\$a vaut : ".bool($a)."<br/>";
    echo "\$b vaut : ".bool($b)."<br/>"."<br/>";
    echo "\$c vaut : ".bool($c)."<br/>";
    echo "\$d vaut : ".bool($d)."<br/>";
    echo "\$e vaut : ".bool($e)."<br/>";
    echo "\$f vaut : ".bool($f)."<br/>"."<br/>";

    /*resultat
    $a vaut : FALSE


$a vaut : FALSE

$b vaut : TRUE


$a vaut : FALSE

$b vaut : TRUE


$c vaut : FALSE

$a vaut : FALSE

$b vaut : TRUE


$c vaut : FALSE

$d vaut : TRUE

$a vaut : FALSE

$b vaut : TRUE


$c vaut : FALSE

$d vaut : TRUE

$e vaut : FALSE

$a vaut : FALSE

$b vaut : TRUE


$c vaut : FALSE

$d vaut : TRUE

$e vaut : FALSE

$f vaut : TRUE
*/
   
   


?>






</body>

</html>