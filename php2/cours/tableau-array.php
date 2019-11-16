<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style  type= "text/css">
table thead th {

    background-color: grey ;
    color:blue;
    border : inset 2px gray;
    font-size:26px;
    box-sizing:border-box; 
   
}
table tbody td{
    background-color:white;
    width:250px;
    height:20px;
    border:inset 2px gray;
    color:blue ;
    text-align:center;
    font-size:22px;
}

</style>
</head>
<body>
    <?php
    $deces = array(959,1037,960,797,663,652,560,619,623,583);
    //$anne = array(1,2,3,4,5,6,7,8,9,10);
    $moyenne = 0;

    echo "<table>
            <caption><h2>Nombre de décès dus aux accidents de la route</h2></caption>
        <thead>
        <tr>
            <th> Année  </th>
            <th> Décès  </th>
        </tr>
        </thead>";

for($i =0 ; $i < 10 ; $i++){

    $moyenne += $deces[$i];
    echo "<tbody>
        
        <tr> 
        <td>".($i+1)."</td>  
        <td>". $deces[$i] ."</td>
        </tr>";
               
}
    echo "<tr>
            <td> <strong>Moyenne</strong>
            <td>".$moyenne*0.1."</td>        
    </tr>";
    echo "</tbody>";

min($deces);

    ?>
    
</body>
</html>