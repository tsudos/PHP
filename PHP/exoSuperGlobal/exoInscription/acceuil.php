<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>formulaire de login</title>
<meta name="connexion" content="formulaire d'indentification compact + bouton validation int�gr�" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
</head>
<body>
	<form class="formulaire" method="post" action="connexion.php">
		<p class="clearfix">
	 		<label for="login">pseudo</label>
			<input type="text" name="login" id="login" placeholder="Nom d'utilisateur">
		</p>
		<p class="clearfix">
			<label for="password">Mot de passe</label>
			<input type="password" name="password" id="password" placeholder="Mot de passe"> 
		</p>
		<p class="clearfix">
			<input type="submit" name="submit" value="CONNECTER">
		</p>       
	</form>
<!-- Source : http://tympanus.net/codrops -->

<form class="formulaire" method="post" action="inscription.php">
		<p class="clearfix">
	 		<label for="login">pseudo</label>
			<input type="text" name="login" id="login" placeholder="Pseudo">
		</p>
		<p class="clearfix">
	 		<label for="name">Nom</label>
			<input type="text" name="name" id="name" placeholder="Nom d'utilisateur">
		</p>
		<p class="clearfix">
	 		<label for="surname">prenom</label>
			<input type="text" name="surname" id="surname" placeholder="prénom d'utilisateur">
		</p>
		<p class="clearfix">
			<label for="email">E.MAIL</label>
			<input type="email" name="email" id="email" placeholder="votre email"> 
		</p>
		<p class="clearfix">
			<label for="password">Mot de passe</label>
			<input type="password" name="password" id="password" placeholder="Mot de passe"> 
		</p>
		<p class="clearfix">
			<label for="confPassword">Verification du Mot de passe</label>
			<input type="password" name="confPassword" id="confPassword" placeholder="Saisir le même mot de passe"> 
		</p>
		<p class="clearfix">
			<input type="submit" name="submit" value="CONNECTER">
		</p>       
	</form>

</body>
</html>