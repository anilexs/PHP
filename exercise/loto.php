<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loto.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="js/loto.js" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="div">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/ea/Nouveau_logo_loto.png" alt="">
    </div>
    <div>
        <form method="post">
            <div class="input">
                <input type="text" maxlength="1" class="numbe" id="number1">
                <input type="text" maxlength="1" class="numbe" id="number2">
                <input type="text" maxlength="1" class="numbe" id="number3">
                <input type="text" maxlength="1" class="numbe" id="number4">
                <input type="text" maxlength="1" class="numbe" id="number5">
            </div>

            <input type="submit" value="submit" class="submit">
            <input type="reset" value="suprimet" class="sup">
        </form>
    </div>

<?php



    # Tirage du loto :
    /*
    - on veut 5 n° au hasard
    - on des n° différents
    - numéros de 1 à 49
    - comment savoir si le n° est déjà sorti ?
    - Trier les n° pour l'affichage final
    - les numeros doivent etre séparé par des tirets (-) dans l'affichage final
    - exemple : 5-7-12-49-34

    

    - utilisez la fonction rand pour générer un nombre aléatoire
    - exemple : $nombreAleatoire = rand(1, 49);
    */

    // $tab = [1,2,3,4,5];
    // $loto = [];

    // while(count($loto) < 5){
    //     $random = rand(1, 49);
    //     if (!in_array($random, $loto)) {
    //     $loto[] = $random;
    //     }
    // };
    // echo "<pre>";
    // print_r($loto);
    // echo "</pre>";



    // $resulta = array_diff($tab, $loto);

    // if (empty($resulta)) {
    //     echo "Les tableaux sont identiques.";
    // } else {
    //     echo "Les tableaux sont différents.";
    // }
?>
</body>
</html>