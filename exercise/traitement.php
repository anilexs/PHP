<?php
if(isset($_POST['valider'])){
    // Récupération des données
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']); 
    $message = htmlspecialchars($_POST['message']);
    // Utilisation de htmlspecialchars pour éviter les attaques XSS en encodant les caractères spéciaux

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $imgName = $_FILES['image']['name']; // Nom de l'image
    $tmpName = $_FILES['image']['tmp_name']; // Emplacement temporaire sur le serveur
    
    $imgName2 = $_FILES['photo']['name']; // Nom de l'image
    $tmpName2 = $_FILES['photo']['tmp_name']; // Emplacement temporaire sur le serveur

    // Destination des fichiers sur le serveur
    // $_SERVER['DOCUMENT_ROOT'] pointe à la racine du serveur, c'est-à-dire le dossier principal
    $destination = $_SERVER['DOCUMENT_ROOT'].'/PHP/exercise/images/'.$imgName; // Destination finale de l'image
    $destination2 = $_SERVER['DOCUMENT_ROOT'].'/PHP/exercise/images/'.$imgName2; // Destination finale de l'image
    // Écho pour vérifier le chemin de destination
    echo $destination;
    echo $destination2;
    move_uploaded_file($tmpName, $destination);
    move_uploaded_file($tmpName2, $destination2);

    echo "$nom $email $message";
}
?>
