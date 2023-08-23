<?php
session_start();
require_once "database.php";
if(isset($_POST['valider'])){ // c'est 
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $mdpCrypt = password_hash($mdp, PASSWORD_DEFAULT);

    $imgName = $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];
    $destination = $_SERVER['DOCUMENT_ROOT'].'/PHP/exercise/espace_membre/corection/img/'.$imgName;
    move_uploaded_file($tmp, $destination);

    $conn = dbConnexion();
    // se connecter
    $request = $conn->prepare("INSERT INTO membres (email, pseudo, mdp, profil_img) VALUES(?, ?, ?, ?)");
    // executer la requete
    try{
        $request->execute(array($email, $pseudo, $mdpCrypt, $imgName));
        // redirection vers une page de notre chois
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

// pour la conneexion
if(isset($_POST['connexion'])){
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    // etablir la connexion avec la db
    $connect = dbConnexion();
    // preparer la requette
    $conexionRequest = $connect->prepare("SELECT * FROM membres WHERE pseudo = ?");
    // executer la requette
    $conexionRequest->execute(array($pseudo));
    // recupere le resultat de la requette
    $utilisateur = $conexionRequest->fetch(PDO::FETCH_ASSOC); // convertir le resultat de la requete en tableau pour le manipuler facilement
    if(empty($utilisateur)){ // si le tableau $utilisateur est vide
        echo "utilisateur inconnu...";
    }else{ // sinon
        // on verifie le mot de passe
        if(password_verify($mdp, $utilisateur['mdp'])){
            //creer les variable de session
            $_SESSION["id"] = $utilisateur['id_membre'];
            $_SESSION["pseudo"] = $utilisateur['pseudo'];
            $_SESSION["img"] = $utilisateur['profil_img'];
        }else{
            echo "mot de passe incorrect";
        }
    }
}