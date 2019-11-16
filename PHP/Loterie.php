<!doctype html>
<html>
<head>
    <title>Loterie PHP</title>

<style type="text/css">
    body{
        background-color: white;
        color:grey;
        font-size: 30px;
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
    }

    tbody tr:last-child {
        background-color:red;
    }

    .btn {
        text-decoration: none;
        padding: 9px;
        font-family: tahoma;
        font-size: 0.5em;
        color: #0c0c0c;
        background-color: #d8d8d8;
        border-radius: 11px;
        -webkit-border-radius: 11px;
        -moz-border-radius: 11px;
        border: 3px groove #a5a5a5;
        box-shadow: 3px 3px 12px #95b3d7;
        -webkit-box-shadow: 3px 3px 12px #95b3d7;
        -moz-box-shadow: 3px 3px 12px #95b3d7;
    }


    .btn:hover {
        padding: 10px;
        font-size: 0.6em;
        background-color: #548dd4;
        border: 3px solid #0f243e;
        box-shadow: -3px -3px 12px #95b3d7;
        -webkit-box-shadow: -3px -3px 12px #95b3d7;
        -moz-box-shadow: -3px -3px 12px #95b3d7;
    }

    </style>
    <meta charset="UTF-8"/>
</head>
<body>

   
 
<?php
 

        $n1;
        $n2;
        $n3;
        $n4;
        $n5;
        $i=0;
        
        echo"<button class='btn' onclick='document.location.reload(false)'> Rafraichir </button>";
        echo "<table><caption><img src='image/loterie en php.png' ></img></caption><thead><tr><th>essai</th><th>Nombre 1</th><th>Nombre 2</th><th>Nombre 3</th><th>Nombre 4</th><th>Nombre 5</th></tr></thead><tbody>";
        
        
        do{
        $i++;
        $n1 = rand(0, 1000) ;
        //floor arrondi inferieur  / round arrondi le plus proche 1.4->1 1.6->2 / ceil arrondi superieur
        $n2=rand(0, 1000) ;
        $n3=rand(0, 1000) ;
        $n4=rand(0, 1000) ;
        $n5=rand(0, 1000) ;
        echo"<tr><td>  $i  </td><td> $n1  </td><td>  $n2  </td><td> $n3  </td><td> $n4  </td><td> $n5  </td></tr> ";
        
        
        
        
        } while ($n1%2==1 || $n2%2==0 || $n3%2==0|| $n4%2==1|| $n5%2==1);
        //}while ($n1%2!==0 || $n2%2!==1 || $n3%2!==1|| $n4%2!==0|| $n5%2!==0);
        
        echo"</tbody></table>";
        if ($i==1){
        echo "resultat Paire/Impaire/Impaire en $i essai";}
        else echo"resultat Paire/Impaire/Impaire en $i essais";
        
        
        
          



?>





</body>
</html>