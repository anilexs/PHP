<?php
class Moule{
    // attributs du gateau
    public $gout;
    public $texture;

    // les methodes du gateau
    public function nourrir(){
        echo "je suis un gateau au ".$this->gout." ".$this->texture."   vous nourris";
    }
}
// creer un gateau au chocolat fondant
$gateauAuChocal = new Moule(); // instancier un objet
$gateauAuChocal->gout = "chocola";
$gateauAuChocal->texture = "fondant";
$gateauAuChocal->nourrir();

$gateauAuCitron = new Moule(); // instancier un objet
$gateauAuCitron->gout = "citron";
$gateauAuCitron->texture = "fondant";
$gateauAuCitron->nourrir();

// creez une classe voiture avec les attribut suivants: 
// couleur, marque, model
// et les methodes suivantes:
// rouler, accelerer, freiner

// creez une voiture de marque peugeot de model 308 et de couleur noire

// pour la methode de rouler afficher le texte "je roule"
// pour la methode accelerer afficher le texte "J'accelere"
// pour la methode accelerer afficher le texte "Je fraine"

class Voiture{
    public $couleur;
    public $marque;
    public $model;

    public function rouler(){
        echo "je roule";
    }
    
    public function accelerer(){
        echo "J'accelere";
    }
    
    public function freiner(){
        echo "Je fraine";
    }
}
$voiture = new Voiture();
$voiture->couleur = "noire";
$voiture->marque = "peugeot";
$voiture->model = "308";
$voiture->rouler();
$voiture->accelerer();
$voiture->freiner();