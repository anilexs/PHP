<?php
// creer un formulaire avec les champs:
// nom, prenom, login, mot de passe
// la validation du formulaire redirige vers action.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="post">
        <div>
            <label>nom</label>
            <input type="text" name="nom" id="">
        </div>
        <div>
            <label>prenom</label>
            <input type="text" name="prenom" id="">
        </div>
        <div>
            <label>login</label>
            <input type="text" name="login" id="">
        </div>
        <div>
            <label>mot de passe</label>
            <input type="text" name="mdp" id="">
        </div>
        <input type="submit" name="submit">
    </form>
</body>
</html>