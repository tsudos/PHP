<?php

function getPDO():PDO{

        try{
            $pdo = new PDO('mysql:host=localhost;dbname=bdblog;charset=utf8','root','');
    }
        catch (PDOexception $e)
    {
        die('erreur pdo : '.$e->getMessage());
        header('Location: 404.html');
    }
        return $pdo;
    }


function recupContact(PDO $pdo, $nom){
    $sql = $pdo->prepare("SELECT contact.nom, contact.prenom, contact.mdp, contact.email 
    FROM contact 
    WHERE contact.nom = ? ");
    $sql->execute(array($nom));
    
    $donnees = $sql->fetch();
    return $donnees;
    
    $sql->closeCursor();
}



?>