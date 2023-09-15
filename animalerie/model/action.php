<?php
// inclure le fichier utilisateur.php
// recuperer les information du formulaire
// creer un instance de la classe Utilisateur
// appeler la methode inscription pour enregistrer les donnees dans bd
require_once "database.php";
require_once "../inc/functions.php";

if(isset($_POST['submit'])){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $login = htmlspecialchars($_POST['login']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

    $db = new User($nom, $prenom, $login, $mdpHash);
    $db->login();
}
require_once "./AnimalRepository.php";

if(isset($_POST['sub'])){
    debugDie($_POST);
    // recuperation des donnees saisies par l'utilisateur dans le formulaire d'animal
    $name = htmlspecialchars($_POST['name']);
    $type = htmlspecialchars($_POST['type']);
    $breed = htmlspecialchars($_POST['race']);

    // on appel le constructeur
    $animal = new AnimalRepository($name, $type, $breed);
    $animal->insert();
}