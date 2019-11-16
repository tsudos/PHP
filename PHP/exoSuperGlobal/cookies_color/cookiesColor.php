<?php
//si qlq chose est dans le formulaire
if(isset($_POST['texte'])&&isset($_POST['fond'])){
	//verifiér si je n'ai pas deja un cookies
	if(!isset($_COOKIE['texte'])&&!isset($_COOKIE['fond'])){

$colorText = $_POST['texte'];
$colorFond = $_POST['fond'];
$exp = time() + 60 ;

setcookie("fond",$colorFond,$exp);

setcookie("texte",$colorText,$exp);
	}
	//si cookie deja creer
	else{
		$colorFond =$_COOKIE['fond'];
		$colorText=$_COOKIE['texte'];
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>formulaire de couleur</title>
	<meta name="connexion" content="formulaire d'indentification compact + bouton validation int�gr�" />
	<style rel="stylesheet" type="text/css" >

		@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);

		/* GLOBALS */

		*,
		*:after,
		*:before {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-ms-box-sizing: border-box;
			-o-box-sizing: border-box;
			box-sizing: border-box;
			padding: 0;
			margin: 0;
		}

		/*php*/
		body {
			color :<?php echo $colorText?> ;
			background-color: <?php echo $colorFond?>;
		}
		.clearfix:after {
			content: "";
			display: table;
			clear: both;
		}

		.formulaire {
			font-family: 'Ubuntu', 'Lato', sans-serif;
			font-weight: 400;
			/* Size and position */
			width: 400px;
			position: relative;
			margin: 60px auto 30px;
			padding: 10px;
			overflow: hidden;

			/* Styles */
			background: #111; 
			border-radius: 0.4em;
			border: 1px solid #191919;
			box-shadow: 
				inset 0 0 2px 1px rgba(255,255,255,0.08), 
				0 16px 10px -8px rgba(0, 0, 0, 0.6);
		}

		.formulaire label {
			/* Size and position */
			width: 50%;
			float: left;
			padding-top: 9px;

			/* Styles */
			color: #ddd;
			font-size: 12px;
			text-transform: uppercase;
			letter-spacing: 1px;
			text-shadow: 0 1px 0 #000;
			text-indent: 10px;
			font-weight: 700;
			cursor: pointer;
		}

		.formulaire input[type=text]{
			/* Size and position */
			width: 50%;
			float: left;
			padding: 8px 5px;
			margin-bottom: 10px;
			font-size: 12px;

			/* Styles */
			background: #1f2124; /* Fallback */
			background: -moz-linear-gradient(#1f2124, #27292c);
			background: -ms-linear-gradient(#1f2124, #27292c);
			background: -o-linear-gradient(#1f2124, #27292c);
			background: -webkit-gradient(linear, 0 0, 0 100%, from(#1f2124), to(#27292c));
			background: -webkit-linear-gradient(#1f2124, #27292c);
			background: linear-gradient(#1f2124, #27292c);    
			border: 1px solid #000;
			box-shadow:
				0 1px 0 rgba(255,255,255,0.1);
			border-radius: 3px;

			/* Font styles */
			font-family: 'Ubuntu', 'Lato', sans-serif;
			color: #fff;

		}

		.formulaire input[type=text]:hover,
		.formulaire label:hover ~ input[type=text]{
			background: #27292c;
		}

		.formulaire input[type=text]:focus {
			box-shadow: inset 0 0 2px #000;
			background: #494d54;
			border-color: #51cbee;
			outline: none; /* Remove Chrome outline */
		}

		.formulaire p:nth-child(3),
		.formulaire p:nth-child(4) {
			float: right;
			width: 50%;
		}

		.formulaire label[for=remember] {
			width: auto;
			float: none;
			display: inline-block;
			text-transform: capitalize;
			font-size: 11px;
			font-weight: 400;
			letter-spacing: 0px;
			text-indent: 2px;
		}
		.formulaire input[type=submit] {
			/* Width and position */
			width: 100%;
			padding: 8px 5px;
		
			/* Styles */
			border: 1px solid #0273dd; /* Fallback */
			border: 1px solid rgba(0,0,0,0.4);
			box-shadow:
				inset 0 1px 0 rgba(255,255,255,0.3),
				inset 0 10px 10px rgba(255,255,255,0.1);
			border-radius: 3px;
			background: #38a6f0;
			cursor:pointer;
		
			/* Font styles */
			font-family: 'Ubuntu', 'Lato', sans-serif;
			color: white;
			font-weight: 700;
			font-size: 15px;
			text-shadow: 0 -1px 0 rgba(0,0,0,0.8);
		}

		.formulaire input[type=submit]:hover { 
			box-shadow: inset 0 1px 0 rgba(255,255,255,0.6);
		}

		.formulaire input[type=submit]:active { 
			background: #287db5;
			box-shadow: inset 0 0 3px rgba(0,0,0,0.6);
			border-color: #000; /* Fallback */
			border-color: rgba(0,0,0,0.9);
		}

		.no-boxshadow .formulaire input[type=submit]:hover {
			background: #2a92d8;
		}

		.formulaire:after {
			/* Size and position */
			content: "";
			height: 1px;
			width: 33%;
			position: absolute;
			left: 20%;
			top: 0;

			/* Styles */
			background: -moz-linear-gradient(left, transparent, #444, #b6b6b8, #444, transparent);
			background: -ms-linear-gradient(left, transparent, #444, #b6b6b8, #444, transparent);
			background: -o-linear-gradient(left, transparent, #444, #b6b6b8, #444, transparent);
			background: -webkit-gradient(linear, 0 0, 100% 0, from(transparent), color-stop(0.25, #444), color-stop(0.5, #b6b6b8), color-stop(0.75, #444), to(transparent));
			background: -webkit-linear-gradient(left, transparent, #444, #b6b6b8, #444, transparent);
			background: linear-gradient(left, transparent, #444, #b6b6b8, #444, transparent);
		}

		.formulaire:before {
			/* Size and position */
			content: "";
			width: 8px;
			height: 5px;
			position: absolute;
			left: 34%;
			top: -7px;
			
			/* Styles */
			border-radius: 50%;
			box-shadow: 0 0 6px 4px #fff;
		}

		.formulaire p:nth-child(1):before{
			/* Size and position */
			content:"";
			width:250px;
			height:100px;
			position:absolute;
			top:0;
			left:45px;

			/* Styles */
			-webkit-transform: rotate(75deg);
			-moz-transform: rotate(75deg);
			-ms-transform: rotate(75deg);
			-o-transform: rotate(75deg);
			transform: rotate(75deg);
			background: -moz-linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
			background: -ms-linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
			background: -o-linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
			background: -webkit-linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
			background: linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
			pointer-events:none;
		}

		.no-pointerevents .formulaire p:nth-child(1):before {
			display: none;
		}
	</style>

	<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
</head>
<body>
	<div></div>
	<form class="formulaire" method="post" action="cookiesColor.php">
		<p class="clearfix">
	 		<label for="text">Couleur du texte</label>
			<input type="text" name="texte" id="texte" placeholder="couleur en anglais">
		</p>
		<p class="clearfix">
			<label for="fond">couleur de fond</label>
			<input type="text" name="fond" id="fond" placeholder="couleur en anglais"> 
		</p>
		<p class="clearfix">
			<input type="submit" name="submit" value="ENVOYER">
		</p>       
	</form>
<!-- Source : http://tympanus.net/codrops -->
</div>
<div>
<h1>Taille des paragraphes : petits - moyens - grands</h1>


<p>Utque proeliorum periti rectores primo catervas densas

opponunt et fortes, deinde leves armaturas, post iaculatores ultimasque subsidiales acies, si fors adegerit, iuvaturas, ita praepositis urbanae familiae suspensae digerentibus sollicite, quos insignes faciunt virgae dexteris aptatae velut tessera data castrensi iuxta vehiculi frontem omne textrinum incedit: huic atratum coquinae iungitur ministerium, dein totum promiscue servitium cum otiosis plebeiis de vicinitate coniunctis: postrema multitudo spadonum a senibus in pueros desinens, obluridi distortaque lineamentorum conpage deformes, ut quaqua incesserit quisquam cernens mutilorum hominum agmina detestetur memoriam Samiramidis reginae illius veteris, quae teneros mares castravit omnium prima velut vim iniectans naturae, eandemque ab instituto cursu retorquens, quae inter ipsa oriundi crepundia per primigenios seminis fontes tacita quodam modo lege vias propagandae posteritatis ostendit.</p>

<p>Accedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior.</p>

<p>Illud autem non dubitatur quod cum esset aliquando virtutum omnium domicilium Roma, ingenuos advenas plerique nobilium, ut Homerici bacarum suavitate Lotophagi, humanitatis multiformibus officiis retentabant.</p>


</div>
</body>
</html>