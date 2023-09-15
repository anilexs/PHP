<?php
class Voiture{
    public $couleur;
    public $marque;
    public $model;

    public function rouler(){
        echo "je roule<br>";
    }
    
    public function accelerer(){
        echo "J'accelere<br>";
    }
    
    public function freiner(){
        echo "Je fraine<br>";
    }
}
$voiture = new Voiture();
$voiture->couleur = "noire";
$voiture->marque = "peugeot";
$voiture->model = "308";
// on fait rouler la voiture
$voiture->rouler();
// on fais accelerer la voiture
$voiture->accelerer();
// on faisfreiner la voiture
$voiture->freiner();

// class voiture avec constructeur
class VoitureAvecConstructeur{
    // atributs
    public $marque;
    public $model;
    public $couleur;
    // constructeur
    public function __construct($brand, $model, $couleur){
        $this->marque= $brand;
        $this->model= $model;
        $this->couleur= $couleur;
    }
    public function rouler(){
        echo "je roule<br>";
    }
    
    public function accelerer(){
        echo "J'accelere<br>";
    }
    
    public function freiner(){
        echo "Je fraine<br>";
    }
}
$voiture2 = new VoitureAvecConstructeur("Citroen", "C4", "rouge");
$voiture2->rouler();