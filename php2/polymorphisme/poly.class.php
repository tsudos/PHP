<?php
class Ville
{
    protected $nom;
    protected $depart;
    public function __set($var, $valeur) {$this->$var = $valeur;}
    public function __get($var) {return $this->$var;}
}
?>