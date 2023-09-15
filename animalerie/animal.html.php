<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace animal register</title>
</head>
<body>
    <form action="./model/action.php" method="post">
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label>Type</label>
            <input type="radio" name="type" value="herbivore" id="herbivore">
            <label for="herbivore">Herbivore</label>
            <input type="radio" name="type" value="carnivore" id="carnivore">
            <label for="carnivore">Carnivore</label>
        </div>
        <div>
            <label for="race">Race</label>
            <input type="text" name="race" id="race">
        </div>
        <input type="submit" value="Enregistrer" name="sub">
    </form>
</body>
</html>