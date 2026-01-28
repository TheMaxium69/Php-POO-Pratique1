<?php

class Personnage {

    public $nom;
    public $vie;
    public $force;

    public function __construct($nom, $force){

        $this->nom = $nom;
        $this->force = $force;
        $this->vie = 100;

    }

    public function afficheInfo(){
        return $this->nom . " a " . $this->vie . " pv et " . $this->force . " Attaque";
    }

    public function attaquer($cible){
        $cible->vie -= $this->force;
        return $this->nom . " attaque " . $cible->nom . " et lui retire " . $this->force . " pv";
    }

    /* BONUS (inverser) */
    public function attaquerPar($attaquant){
        $this->vie -= $attaquant->force;
        return $attaquant->nom . " attaque " . $this->nom . " et lui retire " . $attaquant->force . " pv";
    }

}


$guerrier = new Personnage("Maximus", 20);

$monstre = new Personnage("Shadow", 15);

echo $monstre->afficheInfo() . "<br>";
echo $guerrier->afficheInfo(). "<br>";

echo $guerrier->attaquer($monstre);
echo $monstre->afficheInfo();

echo $monstre->attaquer($guerrier);
echo $guerrier->afficheInfo();

