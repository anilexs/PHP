<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/structure.js"></script>
    <title>Document</title>
</head>
<body>
    <?php 
    $nom = "Heng";
    $prenom = "Mic";
    $nomComplet = $prenom. " ". $nom;
    echo "<p> Bonjour je suis ".$nomComplet."</p>";
    
    $phrase = "La programmation est amusante";
    $mot = substr($phrase, 3, 13); // Résultat : "programmation"
    echo $mot. "<br>";

    $texte = "Les chats sont adorables";
    $nouveauTexte = str_replace("chats", "chiens", $texte); // Résultat : "Les chiens sont adorables"
    echo $texte. "<br>";
    echo $nouveauTexte. "<br>";

    $texte = "Hello World";
    $minuscules = strtolower($texte); // Résultat : "hello world"
    $majuscules = strtoupper($texte); // Résultat : "HELLO WORLD"
    echo $minuscules. "<br>";
    echo $majuscules. "<br>";

    $liste = "pomme,orange,banane";
    $tableau = explode(",", $liste); // Résultat : ["pomme", "orange", "banane"]
    print_r($tableau);
    echo "<br>";

    $tableau = ["pomme", "orange", "banane"];
    $liste = implode(", ", $tableau); // Résultat : "pomme, orange, banane"
    echo $liste. "<br>";

    // Vérification de présence de sous-chaîne
    $texte = "Bonjour à tous";
    $contientBonjour = strpos($texte, "Bonjour") !== false; // Résultat : true
    echo $contientBonjour. "<br>";


    $mavar = null;
    if(isset($mavar)){
        echo "existe bien". "<br>";
    }else{
        echo "n'existe pas du tout". "<br>";
    }


    $str = "10 maisons";
    $nbr = (int) $str;
    echo "$nbr = $nbr ; son type est : " . gettype($nbr). "<br>";
    // Affiche : $nbr = 10 ; son type est : integer
    
    
    $str = "maisons 10";
    $nbr = (int) $str;
    echo "$nbr = $nbr ; son type est : " . gettype($nbr). "<br>";
    // Affiche : $nbr = 0 ; son type est : integer
    
    
    
    
    ?>
</body>
</html>