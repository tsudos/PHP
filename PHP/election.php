<?php
$A =$_POST['A'];
$B=$_POST['B'];
$C =$_POST['C'];
$D=$_POST['D'];

//echo $A." ".$B." ".$C." ".$D;

//(!empty($A)) veux dire non null donc pour tester si un champ n'est pas remplis
//!(($A+$B+$C+$D)>100)) reviens à ecrire (($A+$B+$C+$D)<=100))
if((!empty($A) && !empty($B)&& !empty($C)&& !empty($D)) && !(($A+$B+$C+$D)>100)){
    //Merlin
    if ($A>50 ) {
        echo "Bravo Merlin !<br/>"."<image src='image/heureux.gif'width=250px></image><br/>";
    }
    else if (($B>50||$C>50||$D>50)||($A<12.5)) {
        echo "Merlin, votre éternité vous redonnera une chance !<br/>"."<image src='image/perduK.gif'width=250px></image><br/>";
    }
    else if ($A>$B && $A>$C && $A>$D) {
        echo "Merlin a toutes ses chances de gagner !<br/>"."<image src='image/baloFavo.jpg'width=250px></image><br/>";
    }
    else {
        echo "Merlin, allez chercher Arthur ! Vous allez en avoir besoin !<br/>"."<image src='image/baloDefa.gif'width=250px></image><br/>";
    }
    //Dumbeldore
    if ($B>50 ) {
        echo "Bravo Dumbeldore !<br/>"."<image src='image/DumbG.jpg'width=250px></image><br/>";
    }
    else if (($B>50||$C>50||$D>50)||($B<12.5)) {
        echo "Dommage pour les moldus, Dumbeldore !<br/>"."<image src='image/dumbledorePerdu.jpg'width=250px></image><br/>";
    }
    else if ($B>$A && $B>$C && $B>$D) {
        echo "Dumbeldore a toutes ses chances de gagner !<br/>"."<image src='image/dumbledoreFav.jpg'width=250px></image><br/>";
    }
    else {
        echo "Dumbeldore, allez chercher Harry! Vous allez en avoir besoin !<br/>"."<image src='image/dumbDef.jpg'width=250px></image><br/>";
    }
    //Gandalf
    if ($C>50 ) {
        echo "Bravo Gandalf !<br/>"."<image src='image/gandalfOK.jpg'width=250px></image><br/>";
    }
    else if (($B>50||$C>50||$D>50)||($C<12.5)) {
        echo "Dommage pour la conté Gandalf !<br/>"."<image src='image/gandalfPerdu.jpg'width=250px></image><br/>";
    }
    else if ($C>$B && $C>$A && $C>$D) {
        echo "Gandalf a toutes ses chances de gagner !<br/>"."<image src='image/Gandalffav.jfif'width=250px></image><br/>";
    }
    else {
        echo "Gandalf, allez chercher Frodon ! Vous allez en avoir besoin !<br/>"."<image src='image/gabdalfDef.jpg'width=250px></image><br/>";
    }


    //Docteur Strange
    if ($D>50 ) {
        echo "Bravo Docteur Strange !<br/>"."<image src='image/DSOK.jpg'width=250px></image><br/>";
    }
    else if (($B>50||$C>50||$D>50)||($D<12.5)) {
        echo "Dommage Docteur Strange, mais tu le savais déja!<br/>"."<image src='image/DSPerdu.jpg' width=250px></image><br/>";
    }
    else if ($D>$B && $D>$C && $D>$A) {
        echo "Docteur Strange a toutes ses chances de gagner !<br/>"."<image src='image/DSFav.jpg'width=250px></image><br/>";
    }
    else {
        echo "Docteur Strange, allez chercher Aram et le chaudron ! Vous allez en avoir besoin !<br/>"."<image src='image/DSDef.jpg'width=250px></image><br/>";
    }

}

else  {echo "Saisie érroné !<br/>"."<image src='image/prison.gif'></image>";}


?>