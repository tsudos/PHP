<?php
	// --- BricolageUse.php
	require_once("Bricolage.php");

	echo "<br />Perimetre rectangle (Methode statique) : ", Bricolage::calculerPerimetreRectangle(5,10);	
	Bricolage::calculerSurfaceRectangle(5,10);
	echo "<br />Surface (Variable statique) : ", Bricolage::$surfaceRectangle;
	echo "<br />Surface Appartement : ". Bricolage::calculerSurfaceAppartement(array(5=>4,2=>2,6=>5));
	
    //	echo "calcul du voulume :" ,Bricolage::claculerVolume(5,10);
?>
