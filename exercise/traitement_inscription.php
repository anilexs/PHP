<?php
if(isset($_POST['valider'])){
    // Récupération des données
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']); 
    $mdp = htmlspecialchars($_POST['mdp']); 
    $mdp2 = htmlspecialchars($_POST['mdp2']); 
    if ($nom == "" || $email == "" || $mdp == "" || $mdp2 == "" || $mdp !== $mdp2){
        if($nom == ""){
            echo "nom manquent". "<br>";
        }
        if($email == ""){
            echo "email manquent". "<br>";
        }
        if($mdp == ""){
            echo "mdp manquent". "<br>";
        }
        if($mdp2 == ""){
            echo "confermation mdp manquent". "<br>";
        }
        if($mdp !== $mdp2){
            echo "le mdp et la confirmation du mdp son pas identique". "<br>";
        }
    }else{
        echo "tout rool". "<br>" ."votre nom et $nom avec comme email $email pour des question de securite on montre pas votre mdp";
    }


}
?>
