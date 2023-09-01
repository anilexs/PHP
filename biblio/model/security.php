<?php
session_start();
require_once "../inc/db_connection.php";
if(isset($_POST['submit'])){
    $email  = htmlentities($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    // etablir la connexion avec la db
    $connect = dbConnexion();
    // preparer la requette
    $conexionRequest = $connect->prepare("SELECT * FROM user WHERE email = ?");
    // executer la requette
    $conexionRequest->execute(array($email));
    // recupere le resultat de la requette
    $utilisateur = $conexionRequest->fetch(PDO::FETCH_ASSOC); // convertir le resultat de la requete en tableau pour le manipuler facilement

    if(empty($utilisateur)){ // si le tableau $utilisateur est vide
        // echo "utilisateur inconnu...";
        $_SESSION['error'] = "utilisateur inconnu..."; // ajouter le message d'erreur dans le tableau $_SESSION
        header("Location: ../connexion.php"); // rediriger vers connexion.php
    }else{ // sinon
        // on verifie le mot de passe
        // la fonction password_verify prend 2 parametre :
            // le premier correspond a ce que le user a taper dans la formulaire
            // le deuxieme ce qui se trouve dans la base de donnees
        if(password_verify($mdp, $utilisateur['password'])){
            // la variable $_SESSION est un tableau
            // toutes les superglobal en php est un tableau
            //creer les variable de session
            $_SESSION["id"] = $utilisateur['id'];
            $_SESSION["firstname"] = $utilisateur['firstname'];
            $_SESSION["lastname"] = $utilisateur['lastname'];
            $_SESSION["email"] = $utilisateur['email'];
            $_SESSION["civility"] = $utilisateur['civility'];
            $_SESSION["country"] = $utilisateur['country'];
            $_SESSION["phone"] = $utilisateur['phone'];
            $_SESSION["birthday"] = $utilisateur['birthday'];
            $_SESSION["message"] = $utilisateur['message'];
            $_SESSION["role"] = $utilisateur['role'];
            
            header("Location: ../profil.php");
        }else{
            $_SESSION['erreurmdp'] = "mot de passe incorrect";
            
            header("Location: ../connexion.php");
        }
    }
}
if(isset($_POST['logout'])){
    session_destroy();
    echo"<script>location.href='../connexion.php'</script>";
}