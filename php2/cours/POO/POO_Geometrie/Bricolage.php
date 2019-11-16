<?php
	// --- Bricolage.php
	require_once("Geometrie.php");

	class Bricolage extends Geometrie
	{
		public  $hauteur =10;
		public static function calculerSurfaceAppartement($tableau)
		{
			$surfaceTotale = 0;
			foreach($tableau as $largeur => $longueur)
			
			{
				parent::calculerSurfaceRectangle($largeur, $longueur);
				$surfaceTotale += parent::$surfaceRectangle;
			
			}
			
			return  $surfaceTotale;
		}
		
		/*public static function claculerVolume ($largeur, $longueur) {
			
			return  parent::calculerSurfaceRectangle($largeur, $longueur) * $this->$hauteur;
		}*/
	}
?>
