<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inscription.css">
    <title>Document</title>
</head>
<body>
    <div class="contenaire">
        <header>
    
        </header>
        <form action="traitement.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo"> <br>
            <input type="email" placeholder="Votre email" name="email" id="email"> <br>
            <input type="password" placeholder="Mot de passe" name="mdp" id="mdp"> <br>
            <input type="file" name="img" id="img"><br>
            <input type="submit" name="submit" value="s'inscrire">
            <input type="reset" value="reset">
        </form>
    </div>
</body>
</html>