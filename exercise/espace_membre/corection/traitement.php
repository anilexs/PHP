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

    // le tableau $utilisateur contient les infos de l'utilisateurs comme suivant :
    // $utilisateur = [
    // 'id_membre' => 1, 
    // "email" => "WassilaDors@mail.com", 
    // "pseudo" => "WassilaDors", 
    // "mdp" => "$2y$10$vh0tSKgL8CTBL4ioplv.Juvtefi24KSx0U0XJn1dsr1lfr9jcP2ZK",
    // "profil_img" => "sommeil-enfant-dormir.jpg"
    // ];

    if(empty($utilisateur)){ // si le tableau $utilisateur est vide
        // echo "utilisateur inconnu...";
        $_SESSION['error'] = "utilisateur inconnu..."; // ajouter le message d'erreur dans le tableau $_SESSION
        header("Location: connexion.php"); // rediriger vers connexion.php
    }else{ // sinon
        // on verifie le mot de passe
        // la fonction password_verify prend 2 parametre :
            // le premier correspond a ce que le user a taper dans la formulaire
            // le deuxieme ce qui se trouve dans la base de donnees
        if(password_verify($mdp, $utilisateur['mdp'])){
            // la variable $_SESSION est un tableau
            // toutes les superglobal en php est un tableau
            //creer les variable de session
            $_SESSION["id"] = $utilisateur['id_membre'];
            $_SESSION["pseudo"] = $utilisateur['pseudo'];
            $_SESSION["img"] = $utilisateur['profil_img'];

            // $_SESSION = [
            // 'id' => 1,
            // "pseudo" => "WassilaDors",
            // "img" => "sommeil-enfant-dormir.jpg"
            // ];

            header("Location: accueil.php");
        }else{
            $_SESSION['erreurmdp'] = "mot de passe incorrect";
            header("Location: connexion.php");
        }
    }
}
// pour la publication
if(isset($_POST['publier'])){
    $message = htmlspecialchars($_POST['message']);

    $image_name = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];
    
    $destination = $_SERVER['DOCUMENT_ROOT']."/PHP/exercise/espace_membre/corection/post_img/". $image_name;

    move_uploaded_file($tmp,  $destination);
    // connexion a la bd
    $dbconnexion = dbConnexion();
    $request = $dbconnexion->prepare("INSERT INTO posts (membre_id, photo, text) VALUES (?,?,?)");
    // execution de la requete
    try{
        $request->execute(array($_SESSION["id"], $image_name, $message));
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
}