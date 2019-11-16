<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ajout d'article</title>
<meta name="connexion" content="formulaire d'indentification compact + bouton validation int�gr�" />
<link rel="stylesheet" type="text/css" href="css.css" />
<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
</head>
<body>




<?php

//connection si id_status  1 redir-> administration  / si 2 redir-> ajoutArticle


require_once('config.php');
require_once('fn.database.php');
$connexion = getPDO($config);
