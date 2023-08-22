<?php
// inckure le fichier database qui contien la fonction permetant de se connecter a la base de donnees
require_once("database.php");
if(isset($_POST['envoi'])){
    // recuperation des donnees saisies par l'utilisateur
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    // crypter le mot de passe hasher
    $mdpCrypt = password_hash($mdp, PASSWORD_DEFAULT); 
    // il faut se connecter a la base de donnees
    $db = dbConnexion(); // permet d'etablir la connexion avec la bd = base de donnees
    // 

    // var_dump($db); // verifie si la conection et bien etablie

    $request = $db->prepare("INSERT INTO utilisateurs (nom, prenom, email, mdp) VALUES (?, ?, ?, ?)");
    // execution de la requete

    try { // essayer d'enregistrer les infos dans la tables utilisateurs
        $request->execute(array($nom, $prenom, $email, $mdpCrypt));
    } catch (PDOException $e) {
        echo $e->getMessage(); // afficher l'erreur sql genere
    }
}