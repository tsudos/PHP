<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>formulaire de login</title>
<meta name="connexion" content="formulaire d'indentification compact + bouton validation int�gr�" />
<link rel="stylesheet" type="text/css" href="css.css" />
<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
</head>
<body>
	<form class="formulaire" method="post" action="choixConnect.php">
		<p class="clearfix">
	 		<label for="name">nom</label>
			<input type="text" name="name" id="name" placeholder="Nom d'utilisateur">
		</p>
		<p class="clearfix">
			<label for="password">Mot de passe</label>
			<input type="password" name="password" id="password" placeholder="Mot de passe"> 
		</p>
		<p class="clearfix">
			<input type="submit" name="submit" value="CONNECTER">
		</p>       
    </form>

    </body>
</html>