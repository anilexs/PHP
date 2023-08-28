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
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include_once ("nav.php"); ?>
        <form action="traitement.php" method="post" enctype="multipart/form-data">
            <input type="file" name="img">
            <textarea name="message" cols="30" rows="10" placeholder="votre message"></textarea> <br>
            <button name="publier">publier</button>
        </form>
    </div>
</body>
</html>