<?php
//si qlq chose est dans le formulaire
if(isset($_POST['texte'])&&isset($_POST['fond'])){
	//verifiér si je n'ai pas deja un cookies
	if(!isset($_COOKIE['texte'])&&!isset($_COOKIE['fond'])){

$colorText = $_POST['texte'];
$colorFond = $_POST['fond'];
$exp = time() + 5 ;

setcookie("rond",$colorFond,$exp);

setcookie("texta",$colorText,$exp);
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
<!--<link rel="stylesheet" type="text/css" src="css/style.css"/>-->
<style type="text/css">
    Body{
        color :<?php echo $colorText?> ;
		background-color: <?php echo $colorFond?>;
    }
</style>

<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
</head>
<body>
	<div></div>
	<form class="formulaire" method="post" action="essai.php">
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