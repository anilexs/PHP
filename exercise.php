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
    <?php
    // Exo 1:
    // À partir de la chaîne "La maison bleue", extrayez la sous-chaîne "bleue". pui affichez la
    $chaine = "La maison bleue";
    $bleu = substr($chaine, 10);
    echo $bleu. "<br>";

    // Exo 2:
    // Remplacez le mot "mauvais" par "excellent" dans la chaîne suivante.
    $avis = "Ce film était vraiment mauvais.";
    $avisExcellent = str_replace("mauvais", "excellent", $avis);
    // Effectuez le remplacement.
    echo $avisExcellent. "<br>";

    // Exo 3:
    // Vous avez une chaîne de texte et vous souhaitez capitaliser la première lettre de cette chaîne.
    // La chaîne de texte
    $texte = "bienvenue sur notre site web.";
    // Capitalisez la première lettre
    $texteCapitalized = ucfirst($texte);
    echo $texteCapitalized. "<br>";

    // Exo 4:
    // Vous avez des informations sur un produit : nom, prix et quantité.
    $nomProduit = "Ordinateur portable";
    $prixUnitaire = 899.99;
    $quantite = 3;
    // Calculez le prix total pour le produit et affichez-le.
    $tarif = $prixUnitaire *= $quantite;
    echo $tarif. "<br>";


    // Exo 5:
    // Vous avez un panier d'achats avec plusieurs articles et vous souhaitez calculer le prix total avec une remise.
    
    // Détails des articles
    $article1 = "Livre";
    $prixArticle1 = 12.99;
    $quantiteArticle1 = 2;
    
    $article2 = "DVD";
    $prixArticle2 = 9.99;
    $quantiteArticle2 = 3;
    
    $article3 = "Casque audio";
    $prixArticle3 = 49.99;
    $quantiteArticle3 = 1;
    
    // Calcul du prix total avant remise et affichage
    // Calcul de la remise (10 % du prix total avant remise) et affichage
    // Calcul du prix total après remise et affichage
    $tarif = 12.99 * 2 + 9.99 * 3 + 49.99;
    $pour100 = $tarif / 10; 
    $tarif *= 0.9; 

    echo $pour100 . "<br>"; 
    echo $tarif . "<br>"; 


    // Exo 6:
    // Vous avez un montant en euros que vous souhaitez convertir en dollars américains.
    
    // Montant en euros
    $montantEuros = 100;
    // Taux de change : 1 euro = 1.18 dollars américains
    $tauxChange = 1.18;
    
    // Calculez le montant en dollars puis affichez le
    $conversion = $montantEuros *= $tauxChange;
    echo $conversion. "<br>"; 
    


    # EXERCICE:
    # soit la variable age suivante
    $age = 18;
    #ecrire le code qui permet de verifier si age est superieur a 18
    # si age est superieur ou egale a 18 afficher => majeur
    # si age est inferieur a 18 afficher => mineur

    $verification = ($age >= 18) ? "majeur" : "mineur";
    echo $verification. "<br>"; 
    

    # EXERCICE:
    // une annee bissextile est une annee divisible par 4 et pas par 100 ou divisible par 400
    // ecrire un programme qui permet de verifier si une annee est bisextile ou pas
    // si elle l'est affiche annee bissextile
    // si non affiche annee pas bissextile

    $date = 2003;

    if (($date % 4 == 0 && $date % 100 != 0) || $date % 400 == 0) {
        echo "Oui, $date est une année bissextile.". "<br>";
    } else {
        echo "Non, $date n'est pas une année bissextile.". "<br>";
    }



    # EXERCICE:
    #soit la variable nombre
    #ecrire un programme qui permet de tester si elle est paire ou impaire
    #si elle est paire afficher => le nombre est paire
    #si non afficher => le npombre est impaire

    $num = 1;
    if ($num % 2 == 0){
        echo "oui, $num et paire". "<br>";
    } else{
        echo "non $num et impaire". "<br>";
    }
    ?>
</body>
</html>