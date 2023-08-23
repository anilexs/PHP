<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/connexion.css">
    <script src="js/connexion.js" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="contenaire">
        <header>
            <a href="inscription.php" id="login">inscription</a>
        </header>
        <form action="traitement_co.php" method="post" enctype="multipart/form-data" id="form">
            <div class="input">
                <input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo"> <br>
                <input type="password" placeholder="Mot de passe" name="mdp" id="mdp"> <br>
                <input type="submit" name="submit" value="s'inscrire" id="submit">
                <input type="reset" value="reset" id="reset">
            </div>
        </form>
        <div class="errer">
        </div>
    </div>
</body>
</html>