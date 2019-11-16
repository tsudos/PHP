<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tableau article informatique</title>
<style type="text/css">
    body{
        background-color : #0a3782;
        margin : 0 auto;
    }

    h1{
        text-align: center;
        
    }

    thead {
        font-size : 15px;
        background-color: #001e69;
        color : #fff;
        text-transform: uppercase;
    }
    tbody {
        color  :#282828;
        font-size : 15px;
        background-color:#d9eef4 ;
        
    }

    div {
        width : 500px;
        margin : 10px auto;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }


    #tab {
        align-self: center;
    }
    td {
        border-radius: 10px;
        width : 750px;
    }
    th{
        border-radius: 20% 20% 40% 40%;
        width : 750px;
    }
    table{
        border-radius: 10px;
        width : 750px;
    }

    a img{
        border-radius: 10px;
        display: flex;
        margin-left : 20px;
    }

</style>



</head>

<body>

    <?php 
        echo '<h1>Mon Pc Parfait avec<br/> 
        <img src="https://www.ldlc.com/v4/img/common/LDLC-logo.svg?4.8.14" alt="LDLC" width=200px>
        <br/></h1>';
    ?>





    <div id="tab">

        <?php 
            const TTVA1 = 19.6;
            const TTVA2 = 5.8;


            const Ecran  ="Ecran - ASUS 22 OLED RGB - ProArt PQ22UC";
            const PrixEcranHT = 4180.26;
            const PrixEcranTTC = PrixEcranHT*(1+TTVA1/100);

            const Unité  ="Unité Centrale - MSI Vortex W25 8SM-098FR ";
            const PrixUnitéHT = 4180.26;
            const PrixUnitéTC = PrixUnitéHT*(1+TTVA1/100);

            const Clavier  ="Ecran - ASUS 22 OLED RGB - ProArt PQ22UC";
            const PrixClavierHT = 236.25;
            const PrixClavierTTC = PrixClavierHT*(1+TTVA2/100);

            const Souris  ="Souris - Logitech MX Master 2S Noir ";
            const PrixSourisHT = 94.47;
            const PrixSourisTTC = PrixSourisHT*(1+TTVA2/100);


            echo "<table border='2'>

                <thead >
                    <tr>
                        <th>Libéllé</th>
                        <th>Prix_Ht</th>
                        <th>TTVA</th>
                        <th>Prix_TTC</th>
                        <th>Image/Lien</th>
                    </tr>
                </thead>


                <tbody>       
                    <tr>
                        <td>".Ecran."</td>
                        <td>".PrixEcranHT."</td>
                        <td>".TTVA1."</td>
                        <td>".PrixEcranTTC."</td>
                        <td>
                            <a href='https://www.ldlc.com/fiche/PB00273432.html'>
                                <img src='image/ecran.jpg' name='Ecran' alt='Ecran' width = 100px />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>".Unité."</td>
                        <td>".PrixUnitéHT."</td>
                        <td>".TTVA1."</td>
                        <td>".round(PrixUnitéTC, 1)."</td>
                        <td>
                            <a href='https://www.ldlc.com/fiche/PB00256947.html'>
                                <img src='image/Unité.jpg' name='unité' alt='unité' width = 100px />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>".Clavier."</td>
                        <td>".PrixClavierHT."</td>
                        <td>".TTVA2."</td>
                        <td>".round(PrixClavierTTC, 2)."</td>
                        <td>
                            <a href='https://www.ldlc.com/fiche/PB00256947.html'>
                                <img src='image/Clavier.jpg' name='Clavier' alt='Clavier' width = 100px />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>".Souris."</td>
                        <td>".PrixSourisHT."</td>
                        <td>".TTVA2."</td>
                        <td>".round(PrixSourisTTC, 2)."</td>
                        <td>
                            <a href='https://www.ldlc.com/fiche/PB00256947.html'>
                                <img src='image/Souris.jpg' name='Souris' alt='Souris' width = 100px />
                            </a>
                        </td>
                    </tr>
                </tbody>
                
            </table>"          
        ;?>

    </div>

</body>

</html>