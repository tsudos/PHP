<?php
	// --- Geometrie.php
	class Geometrie
	{
		const PII = 3.14; // --- Une constante
		public static $surfaceCercle; // --- Une propriété statique
		// Ajout de la propriété statique 
		public static $surfaceRectangle;


		// --- Une méthode statique
		public static function calculerSurfaceCercle($rayon)
		{
			self::$surfaceCercle = $rayon * $rayon * self::PII;
		}

		// --- Une méthode statique
		public static function calculerPerimetreCercle($rayon)
		{
			return $rayon * 2 * self::PII;
		}
		// Ajout des méthodes statiques 
		
		// --- Une méthode statique
		public static function calculerSurfaceRectangle($largeur, $longueur)
		{
			self::$surfaceRectangle = $largeur * $longueur;
		}
		// --- Une méthode statique
		public static function calculerPerimetreRectangle($largeur, $longueur)
		{
			return ($largeur * 2) + ($longueur * 2);
		}

	}
?>
