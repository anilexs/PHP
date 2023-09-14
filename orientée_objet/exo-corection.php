<?php
/**
 * creer une classe abstraite FormeGeometrique
 * avec les attribut suivants:
 * 1) Surface
 * 2) perimetre
 * 
 * creer la classe Rectangle fille de FormeGeometrique avec les attributs suivant:
 * 1) longueur
 * 2) largeur
 * et les methodes calculerSurface et calculerPerimetre
 * 
 * creer la classe Cercle fille de FormeGeometrique avec les proprietes suivantes:
 * 1) rayon
 * et les methodes calculerSurface et calculerPerimetre
*/
// https://www.sharemycode.fr/zyl
abstract class FormeGeometrique{
    protected $surface;
    protected $perimetre;

    public function __construct($surface, $perimetre){
        $this->surface = $surface;
        $this->perimetre  = $perimetre;
    }
}


// classe rectangle 
class Rectangle extends FormeGeometrique{
    private $longueur;
    private $largeur;

    public function __construct($surface, $perimetre, $longueur, $largeur){
        // $this->surface = $surface;
        // $this->perimetre  = $perimetre;
        parent::__construct($surface, $perimetre);
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }


    // methode claculerSurface
    public function calculerSurface(){
       $this->surface = $this->longueur * $this->largeur;
        return $this->surface;
    }

    // methode claculerPerimetre
    public function calculerPerimetre(){
        $this->perimetre = ($this->longueur + $this->largeur) * 2;
        return $this->perimetre;
    }
}

// classe Cercle
class Cercle extends FormeGeometrique{
    private $rayon;

    public function __construct($surface, $perimetre, $rayon){
        parent::__construct($surface, $perimetre);
        $this->rayon = $rayon;
    }

    // methode claculerSurface
    public function calculerSurface(){
        $this->surface = M_PI * pow($this->rayon, 2);
        return $this->surface;
     }
 
     // methode calculerPerimetre
     public function calculerPerimetre(){
        $this->perimetre = 2 * M_PI * $this->rayon;
        return $this->perimetre;
     }
}

// creer un rectangle avec une longueur de 10 et une largeur de 4 perimetre et surface 0
$rectangle  = new Rectangle(0,0, 10, 4);
echo "le perimetre du rectangle est : ".$rectangle->calculerPerimetre();