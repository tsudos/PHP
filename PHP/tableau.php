<!doctype html>
<html>
<head>
    <title>Tableau PHP</title>

    <style type="text/css">
        body{
            background-color: #444444;
        }
        table{
            border-radius: 10px;
            text-align:center;
            border :4px ridge white;
        }
        th, td{
            border :4px ridge #444444;
        }
        th {
            background-color:white;
            color : black;
            border-radius: 10px;
        }
        td {
            border-radius: 10px;
        }
        tbody tr {
            background-color:black;
            color:white;
        }

        tbody tr:last-child {
            background-color:red;
        }

    </style>
    <meta charset="UTF-8"/>
</head>
<body>

   
 
<?php
$tableau= array('jean','robert','bob','dylan');

print_r($tableau);
echo "<br>";


foreach ($tableau as $key => $value) {
    echo "$key a $value<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$tableau= array(1=>'jean',2=>'robert',3=>'bob',4=>'dylan');

print_r($tableau);
echo "<br>";


foreach ($tableau as $key => $value) {
    echo "$key a $value<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$tableau= array('#fonzy'=>'jean','#Barjot'=>'robert','#Drogon'=>'bob','#Razor'=>'dylan');

print_r($tableau);
echo "<br>";

echo "<table border='2'><thead><tr><th>#Joueur</th><th>Prénom Joueur</th></tr></thead><tbody>";
foreach ($tableau as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}

echo "</tbody></table>";
?>





</body>
</html>