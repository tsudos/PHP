<?php
/**
 * Member Class
 * For every member of app
 */
class Membre
{
  private $pseudo;
  private $email;
  private $signature;
  private $actif;

// getter
  public function getPseudo() : string
  {
    return $this->pseudo;
  }

// setter
  public function setPseudo($newPseudo) : void
  {
    $this->pseudo = $newPseudo;
  }


// getter
  public function getEmail() : string
  {
    return $this->email;
  }

// setter
  public function setEmail($newEmail) : void
  {
    $this->email = $newEmail;
  }


// getter
  public function getSignature() : string
  {
    return $this->signature;
  }

// setter
  public function setSignature($newSignature) : void
  {
    $this->signature = $newSignature;
  }


// getter
  public function getActif() : int
  {
    return $this->actif;
  }

// setter
  public function setActif($newActif) : void
  {
    $this->actif = $newActif;
  }
}
