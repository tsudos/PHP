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


function recupBillet(PDO $pdo){
    $sql = "SELECT * FROM billet ORDER BY date_creation DESC LIMIT 0, 5";
    $row =$pdo->query($sql);

    if(!$row)   
        echo"pb acces billet";
    else{
        return $row;
    }
}


function recupBilletCom(PDO $pdo, $get){
    $sql = $pdo->prepare('SELECT * FROM billet WHERE id_billet = ?');
    $sql->execute(array($get));
    $donnees = $sql->fetch();
    if(!$donnees)   
        echo"pb acces Billet Commentaire (pour info : $get)";
    else{
        return $donnees;
    }
$sql->closeCursor();
}


function recupCom(PDO $pdo, $id){
    
    $sql = "SELECT commentaires.auteur, commentaires.date_commentaire,commentaires.commentaire, commentaires.id_billet FROM commentaires  Where commentaires.id_billet = $id ORDER BY commentaires.date_commentaire ";
    $donnees = $pdo->query($sql);
    if(!$donnees)
        echo"pb acces Commentaire (pour info : $id)";
    else {
    return $donnees;
    }
    $sql->closeCursor();
}


?>