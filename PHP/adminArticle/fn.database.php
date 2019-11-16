<?php
/*
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
}*/

function getPDO():PDO{

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=redactioninfo;charset=utf8','root','');
    }
    catch (PDOexception $e)
    {
    die('erreur pdo : '.$e->getMessage());
    header('Location: 404.html');
    }
    return $pdo;
}
    
function recupBillet(PDO $pdo){
    $sql = "SELECT * FROM articles ORDER BY date_redaction DESC LIMIT 0, 5";
    $row =$pdo->query($sql);

    if(!$row)   
        echo"pb acces billet";
    else{
        return $row;
    }
}

function recupBilletComplet(PDO $pdo,$idGet){
    $sql = $pdo->prepare("SELECT *
    FROM articles 
    WHERE articles.id_article = ? ");
    $sql->execute(array($idGet));
    $donnees = $sql->fetch();
    return $donnees;
    }



function recupContact(PDO $pdo, $nom){
    $sql = $pdo->prepare("SELECT utilisateurs.nom, utilisateurs.prenom, utilisateurs.mdp, utilisateurs.email, utilisateurs.id_statut
    FROM utilisateurs 
    WHERE utilisateurs.nom = ? ");
    $sql->execute(array($nom));
    $donnees = $sql->fetch();
    return $donnees;

}


function ajoutArticle(PDO $pdo,$nom,$contenu,$idCat,$idRed){
    
    $req = $connexion->prepare('INSERT INTO articles (titre, contenu, id_categorie,date_redaction,id_redacteur) VALUES (?,?,?,?,?)');
    $req->execute(array($nom,$contenu,$idCat,'CURRENT_TIME',$idRed));

    echo "Article ajouté!";
}





function compMail(PDO $pdo,$email){
    $req = $pdo->prepare("SELECT utilisateurs.email FROM utilisateurs Where utilisateurs.email=?");
    $req->execute(array($email));
    $row = $req->fetch();
    if(!$row) {  
    return NULL;}
    else{
    return $row;
}
}


function compMdp(PDO $pdo,$nom){
    $req = $pdo->prepare("SELECT utilisateurs.nom, utilisateur.prenom FROM utilisateurs Where utilisateurs.nom=? AND utilisateurs.prenom=?");
    $req->execute(array($nom,$prenom));
    $row = $req->fetch();
    if(!$row) {  
    return NULL;}
    else{
    return $row;
}
}



/*
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
*/

?>