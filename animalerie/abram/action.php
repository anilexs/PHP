<?php
// inclure le fichier utilisateur.php
// recuperer les information du formulaire
// creer un instance de la classe Utilisateur
// appeler la methode inscription pour enregistrer les donnees dans bd
require_once "database.php";
require_once "utilisateur.php";

if(isset($_POST['submit'])){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $login = htmlspecialchars($_POST['login']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

    $db = new User($nom, $prenom, $login, $mdpHash);
    $db->login();
}