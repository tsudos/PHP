<head>
    <meta name="CHARSET" content="UTF-8">
    <style>
        p{
            font-size: 24px;
        }
        strong{
            color: #f5a442;
            background: #f7ffc2;
        }

    </style>
</head>
<body>
<?php
 if (!$fp = fopen("ex3.txt","r"))
 {echo "Echec de l'ouverture du fichier";}
 else {
    $contenu = fread($fp, 1000);
    $arraynote = explode("/", $contenu );
    $result = array_sum($arraynote);

    $moyenne =$result/ count($arraynote);
    foreach($arraynote as $k => $v)
    {
        echo ($k+1).' '. $v ."<br/>";
    }
    echo "<p>la moyenne est de <strong>" .round($moyenne)."</strong> visites par mois en moyenne</p>" ;
}
 fclose($fp); 
 ?>    

</body>



































<!--   avec une boucle For
    
    // for ($i=0; $i < count($arraynote)  ; $i++) { 
    //     $result = $result +  $arraynote[$i];
        
    // }
    // var_dump($result/ count($arraynote));
    // var_dump($arraynote); -->