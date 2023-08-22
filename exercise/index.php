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
    <form method="POST" action="traitementdb.php">
        <div>
            <div>
                <label for="name">Nom</label><br>
                <input type="text" name="nom"><br>
            </div>
            <div>
                <label for="name">Prenom</label><br>
                <input type="text" name="prenom"><br>
            </div>
            <div>
                <label for="email">E-Mail :</label><br>
                <input type="email" name="email"><br>
            </div>
            <div>
                <input type="password" name="mdp" placeholder="Mot de Passe"><br>
            </div>

            <input type="submit" class="envoi" name="envoi">
        </div>
    </form>
</body>
</html>