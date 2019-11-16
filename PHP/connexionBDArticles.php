<?php
//accès à la BD toujours sécurisé par un try 
    try{
        //3 paramètres ('ciblage la base de donnée','utilisateur','mdp')
        $connexion = new PDO('mysql:host=localhost;dbname=BDarticles;charset=utf8','root','');
        echo"accès à la base de donnée : valide !<br>";
    }
    catch (exception $e)
    {
    die('erreur : '.$e->getMessage());
    }
?>