<?php
    require_once("../database.php");
if(isset($_POST['submit'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);

    $mdpCrypt = password_hash($mdp, PASSWORD_DEFAULT);

    $dossier = 'image';

    $contenu = scandir($dossier);
    $nombre_elements = count($contenu) - 2;

    $imgName = $_FILES['img']['name'];
    $imageCompose = $nombre_elements."_".$imgName;
    $tmpName = $_FILES['img']['tmp_name']; 
    $destination = $_SERVER['DOCUMENT_ROOT'].'/PHP/exercise/espace_membre/image/'. $imageCompose;
    move_uploaded_file($tmpName, $destination);

    $db = dbConnexion();

    $request = $db->prepare("INSERT INTO membres (email, pseudo, mdp, profil_img) VALUES (?, ?, ?, ?)");


    try {
        $request->execute(array($email, $pseudo, $mdpCrypt, $imageCompose));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}