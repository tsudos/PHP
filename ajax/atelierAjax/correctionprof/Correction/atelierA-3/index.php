<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>atelierA-3 : Machine &agrave; sous - WEB DYNAMIQUE TRADITIONNEL</title>
  <link rel="stylesheet" type="text/css" href="style.css" />  
 </head>
 <body>
 <img src="../commun/logo.jpg" width="600" height="100">
 <h2> AtelierA-3 </h2>
 <div id="page">
   <!--zone du résultat-->
   <div id="info">Bravo, vous avez gagné 
   <span id="resultat">
   <?php 
   if(isset($_GET['button'])) {
   $resultat =  rand(0,100);
   echo $resultat ;
   }else{
   echo "0";
   }
   ?>
   </span> Euros</div>
   <!--zone du formulaire-->
   <div id="formulaire">
   <form method="get" action="index.php">      
      <input name="button" type="submit"  value="JOUER" />
   </form>
   </div>
 </div>
 <!--commentaires sur l'atelier-->
 <div id="commentaire">
 	<ul>
		<li>Page dynamique traditionnelle en PHP (valeur de gain aléatoire)</li>
		
	    <li>Avec une feuille de style</li>
    </ul>
 </div>
</body>
</html>
