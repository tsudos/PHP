<style type="text/css">
    body {
        background-color: #b8cce4;
        color : #444444;
        font-family: tahoma;
    }

    .btn {
        text-decoration: none;
        padding: 10px;
        margin : 10px;
        font-family: tahoma;
        font-size: 1.1em;
        color: #f2dcdb;
        background-color: #899F11;
        border-radius: 15px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border: 2px solid #f2dcdb;
        box-shadow: -2px 0px 17px #444444;
        -webkit-box-shadow: -2px 0px 17px #444444;
        -moz-box-shadow: -2px 0px 17px #444444;
    }

    .btn:hover {
        padding: 10px;
        font-family: arial;
        font-size: 1em;
        color: #FFFFFF;
        background-color: #b8cce4;
        border-radius: 24px;
        -webkit-border-radius: 24px;
        -moz-border-radius: 24px;
        border: 4px solid #FFFFFF;
        box-shadow: 1px 1px 4px #777777;
        -webkit-box-shadow: 1px 1px 4px #777777;
        -moz-box-shadow: 1px 1px 4px #777777;
    }

</style>


<?php
    $mdp=$_POST['pass'];
    $arrayMdp=['un','deux','trois'];

    if (!empty($mdp)) {
        if (in_array($mdp, $arrayMdp)) {

            switch ($mdp) {
                case 'un':
                    echo "Bonjour Admin !";
                    break;
                case 'deux':
                    echo "Bienvenue Mr Right !";
                    break;
                case 'trois':
                    echo "Ola Mr Left !";
                    break;      
            };
        }
        else {
            echo "Vous n'avez pas d'autorisation ! <br> La page va revenir en arrière seul.<br>";
            echo "<a href='traitement-04.html'><button class='btn'>revenir en arrière</button></a>";
            echo "<a href='Election.html'><button class='btn'>Voulez-vous participer à un test ?</button></a>";
            
            //header("refresh:5;url=traitement-04.html");
            }
    }
    else {
        echo "<script>alert('vous avez oublié de renseigner un mot de passe.');</script>";
        header("refresh:0;url=traitement-04.html");
    }




?>