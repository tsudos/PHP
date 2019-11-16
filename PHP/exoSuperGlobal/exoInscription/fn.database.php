<?php

function getPDO (array $config) : PDO {
    try{
        $pdo = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['user'], $config['mdp']);
    }
    catch (exception $e)
    {
    die('erreur : '.$e->getMessage());
        header('Location :404.html');
    }
    return $pdo;
}

/* en secours
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
*/


function recupContact(PDO $pdo, $pseudo){
    $sql = $pdo->prepare("SELECT contact.nom, contact.prenom, contact.mdp, contact.email, contact.pseudo 
    FROM contact 
    WHERE contact.pseudo = ? ");
    $sql->execute(array($pseudo));
    $donnees = $sql->fetch();
    return $donnees;

}




function inscription(PDO $pdo, $nom,$prenom,$mdp,$email,$pseudo){

$req = $pdo->prepare('INSERT INTO contact (nom, prenom, mdp, email, pseudo) VALUES (:n,:p,:m,:e,:l)');
$req->execute(array('n'=> $nom, 'p' => $prenom, 'm' => $mdp, 'e' => $email, 'l' => $pseudo ));
}





function comparaison(PDO $pdo){
    $sql = ("SELECT contact.email, contact.pseudo FROM contact ");
    $row = $pdo->query($sql);
    $tab = $row->fetch();
    if(!$row)   
        echo"pb acces verif !";
    else{
        return $tab;
        //return $row;
    }
}


function compMail($connexion,$email){
    $req = $pdo->prepare("SELECT contact.email FROM contact Where contact.email=?");

    $req->execute(array($email));
    return $donnees;


}




?>