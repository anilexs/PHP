<?php
abstract class Person{
    public $nom;
    public $prenom;

    public function courir(){}
    public function manger(){}
    public function bouger(){}
    public function danser(){
        echo "je sais danser la salsa et le tango hls";
    }

    public function pleurer(){}
}


class Mecano extends Person{
    
}

class Pilote extends Person{
    // public $nom;
    // public $prenom;

    // public function courir(){}
    // public function manger(){}
    // public function bouger(){}
    // public function danser(){
    //     echo "je sais danser la salsa";
    // }

    // public function pleurer(){}
}