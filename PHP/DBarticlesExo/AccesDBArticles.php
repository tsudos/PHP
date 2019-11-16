<?php
require('config.php');
require('fn.articles.php');
$connexion = getPDO($config);

//accès à la BD toujours sécurisé par un try 
$pdo = getPDO($config);

echo "succès !!";

?>