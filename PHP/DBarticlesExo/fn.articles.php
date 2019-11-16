<?php

function getPDO (array $config) : PDO {
    try{
        
        return new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].';charset=utf8,'.$config['user'].','.$config['mdp']);
        echo"accès à la base de donnée : valide !<br>";
    }
    catch (exception $e)
    {
    die('erreur : '.$e->getMessage());
    header('Location :404.html');
    }
}


?>