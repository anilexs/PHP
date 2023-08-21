<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/euroMillions.css">
    <script src="js/euroMillions.js" defer></script>
    <title>Document</title>
</head>
<body>
<?php
    # Tirage EuroMillions
    /*
     - Pour jouer à EuroMillions , il vous sfaut cocher 7 numéros : 
     - 5 numéros sur une grille de 50 numéros 
     - et 2 étoiles sur une grille de 12 numéros. 
     - Vous remportez le jackpot si vous avez 5 numéros gagnants et les 2 étoiles.

    

     - ecrire une fonction tirage qui prends un deux parametres
     - le premier parametres correspond au nombre de numeros a tiré
     - le second correspond au nombre maximum que les numeros ne doivent pas dépasser
    */

    // while(count($loto) < 7){
    //     $random = rand(1, 49);
    //     if (!in_array($random, $loto)) {
    //     $loto[] = $random;
    //     }
    // };



    // $resulta = array_diff($tab, $loto);

    // if (empty($resulta)) {
    //     echo "Les tableaux sont identiques.";
    // } else {
    //     echo "Les tableaux sont différents.";
    // }


    $tab = [1,2,3,4,5,6,7];
    function tirage($num,$max) {
            $EuroMillions = [];
            while(count($EuroMillions) < $num){
            $random = rand(0, $max);
            if (!in_array($random, $EuroMillions)) {
            $EuroMillions[] = $random;
        }
    };
        echo "<pre>";
        print_r($EuroMillions);
        echo "</pre>";

        return $EuroMillions;
    }
    $result = tirage(5,50);
    $star = tirage(2,12);

    echo implode('-', $result)." ".implode('-', $star);

    // $resulta = array_diff($tab, $result);

    // if (empty($resulta)) {
    //     echo "Les tableaux sont identiques.";
    // } else {
    //     echo "Les tableaux sont différents.";
    // }
?>
</body>
</html>