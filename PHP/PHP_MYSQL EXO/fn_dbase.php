<?php

// pas besoin dans la crea de function include_once('config.php');


function getPDO(array $config):PDO{
    //accès à la BD toujours sécurisé par un try 
    try{
        //.$config['host']. permet de recuperer la valeur 'localhost' du fichier 'config.php' grace à 'include_once('config.php');' 
        // sans passage de parametre
        //$pdo = new PDO('mysql:host=localhost;dbname=magasin;charset=utf8','root','');
        
        //avec passage de parametre simplifié
        $pdo = new PDO($config['dsn'],$config['login'],$config['mdp']);

        //ou complexifié
        //return $pdo = new PDO('mysql:host='.$config['host'].';dbname='.$config['database'], $config['login'], $config['mdp'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }
    catch (PDOexception $e)
    {
    die('erreur pdo: '.$e->getMessage());
    header('Location: 404.html');
}
    
return $pdo; 
}


function show (PDO $pdo) {
    //* = id_modele,modele,carburant
    $sql = "SELECT * FROM modele";
    //liste de rangé dans le retour de mysql
    $row =$pdo->query($sql);

    //si pas de ligne/rangée alors pb
    if(!$row) 
        echo"pb acces";
    else{
        return $row;
    }
}
/*
function showP (PDO $pdo) {
    //* = id_modele,modele,carburant
    $sql = "SELECT * FROM proprietaire";
    //liste de rangé dans le retour de mysql
    $row =$pdo->query($sql);

    //si pas de ligne/rangée alors pb
    if(!$row) 
        echo"pb acces";
    else{
        return $row;    
    }
}
*/



function addM(PDO $pdo,array $data):void{

    $req = $pdo->prepare('INSERT INTO modele(id_modele,modele,carburant) VALUES (?,?,?)');
    $req->execute(array($data['id_modele'], $data['modele'], $data['carburant']));
   
}
/*
function addP(PDO $pdo,array $data):void{

    $req = $pdo->prepare('INSERT INTO proprietaire (nom,prenom,adresse,ville,codepostal) VALUES (?,?,?,?,?)');
    $req->execute(array($data['nom'], $data['prenom'], $data['adresse'], $data['ville'], $data['postale']));
   
}
*/
?>