<?php
session_start();
require_once "../../model/userModel.php";
if(isset($_POST['inscription'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    // hasher le mot de passe
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    // apeler la methode inscription de la classe User
    // la methode inscription etant static donc on utilise le nom de la classe suivit de "::" ensuite le nom de la methode qui est inscription
    User::inscription($name, $email, $passwordHash);
}

// pour la connexion
if(isset($_POST['login'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    // apeler la methode connexion de la classe User
    // la methode inscription etant static donc on utilise le nom de la classe suivit de "::" ensuite le nom de la methode qui est connexion
    User::connexion($email, $password);
}