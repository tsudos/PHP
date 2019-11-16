<?php

include_once('forme.class.php');
class Cercle extends Forme{
    private $rayon;

    public function __construct(float $R){
        $this->rayon=$R;
    }


    public function surface():float {
        $calcul = 2*pow($this->rayon, 2)*self::PI;
       return $calcul;
    }



    function __toString():string{
        return "Rayon du cercle : $this->rayon<br>"; 
    }

}
?>