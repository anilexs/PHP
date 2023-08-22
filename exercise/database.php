<?php
function dbConnexion(){
    $connexionDb = null; // variable qui doit stocker notre instance de connexion a la base de données
    try{ // essayer de se connect a la base de donnees
        $connexionDb = new PDO("mysql:host=localhost;dbname=cours_db", "root", ""); // on recupere lobjet de connexion a la base de donnees dans la variable $connexionDb
    }catch(PDOException $e){ // si la connexion echoue
        $connexionDb = $e; // on recuperer notre erreur dans $connexionDb
    }
    return $connexionDb; // retourn a l'objet de connexion ou une erreur
}