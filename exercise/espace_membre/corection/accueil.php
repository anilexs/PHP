<?php
    session_start(); // a mettre avant le html c'est pour demarer une session

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
    <title>Document</title>
</head>
<body>
    <?php include_once "nav.php"; ?>

</body>
</html>