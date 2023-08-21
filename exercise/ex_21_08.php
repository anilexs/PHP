<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ex_21_08.css">
    <title>Document</title>
</head>
<body>
    <?php
// Ajout et suppression d'éléments
// Créez un tableau vide.
// Ajoutez les nombres de 1 à 5 à ce tableau.
// Supprimez le troisième élément.
// Affichez le contenu final du tableau.
$tab = [];
for ($i = 1; $i <= 5; $i++){
    $tab [] = $i;
}
echo "<pre>";
print_r($tab);
echo "</pre>";
array_splice($tab, 2, 1);
echo "<pre>";
print_r($tab);
echo "</pre>";

echo  "exercice 2";

// Recherche et modification
// Créez un tableau contenant plusieurs noms de pays.
// Vérifiez si "France" est présent dans le tableau.
// Si oui, remplacez "France" par "Espagne".
// Affichez le tableau modifié.

$word = ["kyoto","russie","France","tokyo","italie","anglais "];
echo "<pre>";
print_r($word);
echo "</pre>";
if (in_array("France", $word)) {
    echo "France existe dans le tableau.";
    $word[array_search("France", $word)] = "espagne";
} else {
    echo "France n'existe pas dans le tableau.";
}
echo "<pre>";
print_r($word);
echo "</pre>";

?>
</body>
</html>