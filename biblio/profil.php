<?php
    session_start(); // a mettre avant le html c'est pour demarer une session
    require_once './inc/db_connection.php';
    // if(!(isset($_SESSION['id']))){ // si il n y a pas de session active 
    if(!(isset($_SESSION['id']))){ // si il n y a pas de session active 
        header("Location: connexion.php"); // rediriger vers le formulaire de connexion
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profil.css">
    <title>Document</title>
</head>
<body>
<?php require_once "./inc/nav.php"; ?>
    <div class="profil">
        <p><?= $_SESSION['firstname'] ?></p>
    </div>
<?php require_once "./inc/footer.php"; ?>