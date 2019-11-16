<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hello World + somme</title>
<style type="text/css">

    h1{
        text-align: center;

    }

    thead {
        font-size : 15px;
        background-color: yellow;
        color : grey;
        text-transform: uppercase;
    }
    tbody {
        font-size : 15px;
        background-color: green;
        color : white;
    }

    div {
        width : 250px;
        margin : 10px auto;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }

    .img{
        width : 250px;
        margin : 10px auto;
    }

    #tab {
        align-self: center;
    }
    td {
        border-radius: 10px;
    }
    th{
        border-radius: 20% 20% 40% 40%;
    }
    table{
        border-radius: 10px;
    }

</style>

</head>

<body>

    <?php 
    echo '<h1>Mon paragraphe après Hello world<br/></h1>' ;
    ?>

<div id="calcul">
<!--declaration de variable et calcule-->
    <?php echo 'La somme de deux nombres :<br/>' ;
        $nombre1 = 24;
        $nombre2 = 14;
        $somme= $nombre2+$nombre1;
        $modulo = $nombre1%$nombre2;
        $sous = $nombre1-$nombre2;
        $multi = $nombre1*$nombre2;
        $divi = $nombre1/$nombre2;

        echo $nombre1." + ".$nombre2." = ".$somme."<br/>";
        echo $nombre1." modulo ".$nombre2." = ".$modulo."<br/>";
        echo $nombre1." - ".$nombre2." = ".$sous."<br/>";
        echo $nombre1." * ".$nombre2." = ".$multi."<br/>";
        echo $nombre1." / ".$nombre2." = ".$divi."<br/>";
    ?>
<!-- les variables et le texte sont à concaténé avec des . -->
</div>



<div id="tab">
<!--bien commencer par des "" et pas des '' si l'on veut faire passer une variable -->
<?php echo '<table border="2">
        <thead >
            <tr><th>nom</th><th>prenom</th><th>email</th></tr></thead>
        <tbody>
            <tr><td name="n">  Dufour  </td><td name="p">  Stephane  </td><td name="e">  tsud@sfr.fr  </td></tr>
            <tr><td name="n">  Gret  </td><td name="p">  Robert  </td><td name="e">  rogert@free.fr  </td></tr>
            <tr><td name="n">  Amjad  </td><td name="p">  Ali  </td><td name="e">  AAA@bouygues.fr  </td></tr>
            <tr><td name="n">  Tisma  </td><td name="p">  Nikola </td><td name="e">  titi@Gmail.com  </td></tr>
        </tbody>
        </table>';
    ?>
</div>

<div id="img">

    <?php echo '<img src="image/mer.jpg" name="mer" alt="mer" />'; ?>

</div>

</body>

</html>