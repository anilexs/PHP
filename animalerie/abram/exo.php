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
 * et les methodes calculerSurface et calculerPerimetre ( methodes = function dant les classe)
 */

// Classe abstraite FormeGeometrique
abstract class FormeGeometrique {
    protected $surface;
    protected $perimetre;

    abstract public function calculerSurface();
    abstract public function calculerPerimetre();
}

class Rectangle extends FormeGeometrique {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerSurface() {
        $this->surface = $this->longueur * $this->largeur;
        return $this->surface;
    }

    public function calculerPerimetre() {
        $this->perimetre = 2 * ($this->longueur + $this->largeur);
        return $this->perimetre;
    }
}

class Cercle extends FormeGeometrique {
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function calculerSurface() {
        $this->surface = pi() * pow($this->rayon, 2);
        return $this->surface;
    }

    public function calculerPerimetre() {
        $this->perimetre = 2 * pi() * $this->rayon;
        return $this->perimetre;
    }
}

$rectangle = new Rectangle(5, 3);
echo "Rectangle - Surface : " . $rectangle->calculerSurface() . ", Périmètre : " . $rectangle->calculerPerimetre() . "\n";

$cercle = new Cercle(4);
echo "Cercle - Surface : " . $cercle->calculerSurface() . ", Périmètre : " . $cercle->calculerPerimetre() . "\n";
?>
