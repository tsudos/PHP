<!doctype html>
<html>
<head>
    <title>Election</title>

    <style type="text/css">
        body{
            background-color:  rgba(55, 151, 206, 0.795);
            color:black;
            font-size: 20px;
            }
        #img{
            border : 2px solid green;
            width:250px;
            border-radius:15px;
        }
        #image{
            border-radius:12px; 
        }

    </style>

<meta charset="UTF-8"/>

<?php

function citation():string {
    $cit=rand(1,4);

        

    switch ($cit) {
        case 1:
            echo "<div id='img'><image id='image' src='image/MerlinK.jpg' width=250px></image>
            <p>Hé toi là bas avec ton casque à cornes, présente-moi ta femme, tu sauras pourquoi t'as des cornes !
            - Kaamelott,<cite> Livre II, 4 </cite>
            </p></div>";
            break;
        case 2:
            echo "<div id='img'><image id='image' src='image/DumbG.jpg' width=250px></image>
            <p>  Mais vous savez, on peut trouver du bonheur même dans les endroits les plus sombres. Il suffit de se souvenir d'allumer la lumière
            - Dumbledore,<cite> Harry Potter et le prisonnier d'Azkaban  </cite>
            </p></div>";
            break;
        case '3':
            echo "<div id='img'><image id='image' src='image/gandalfOK.jpg' width=250px></image>
            <p>Nombreux sont les vivants qui mériteraient la mort. Et les morts qui mériteraient la vie. Pouvez-vous leur rendre, Frodon ?
            - Gandalf,<cite> Le seigneur des anneaux </cite>
            </p></div>";
            break;
            
        default:
            echo "<div id='img'><image id='image' src='image/DSOK.jpg' width=250px></image>
            <p>La souffrance est une vieille connaissance<br>
            - Docteur Strange,<cite> Docteur Strange </cite>
            </p></div>";
            break;

        }
        return "";
}




?>
</head>
<body> 
    <h2>Mes citations Alétatoires</h2>
      
    


    <p>Et quia Montius inter dilancinantium manus.
    spiritum efflaturus Epigonum et Eusebium nec professionem nec
    Pittacas cognomento, concitatus orator, cum quaestor non hos.
    sed tribunos fabricarum insimulasset promittentes armorum.
    si novas res agitari conperissent.</p>

    <p>Et quia Montius inter dilancinantium manus.
    spiritum efflaturus Epigonum et Eusebium nec professionem nec
    Pittacas cognomento, concitatus orator, cum quaestor non hos.
    sed tribunos fabricarum insimulasset promittentes armorum.
    si novas res agitari conperissent.</p>


    <p>Et quia Montius inter dilancinantium manus.
    spiritum efflaturus Epigonum et Eusebium nec professionem nec
    Pittacas cognomento, concitatus orator, cum quaestor non hos.
    sed tribunos fabricarum insimulasset promittentes armorum.
    si novas res agitari conperissent.</p>
    
    <p>Et quia Montius inter dilancinantium manus.
    spiritum efflaturus Epigonum et Eusebium nec professionem nec
    Pittacas cognomento, concitatus orator, cum quaestor non hos.
    sed tribunos fabricarum insimulasset promittentes armorum.
    si novas res agitari conperissent.</p>

    <?php
    echo citation()."";
?>







</body>
</html>