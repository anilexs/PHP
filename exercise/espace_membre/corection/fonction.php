<?php
require_once "database.php";
// pour recuperer la liste des posts
function getPost(){
    $lesPoset = null;
    $dbconnect = dbConnexion(); // connexion a la db
    // preparation de la requete
    // $request = $dbconnect->prepare("SELECT id_post, likes, membre_id, text, pseudo FROM posts WHERE membre_id IN (SELECT * FROM membres)");
    $request = $dbconnect->prepare("SELECT id_post, likes, membre_id, text, photo, id_membre, pseudo FROM posts, membres WHERE posts.membre_id = membres.id_membre");
    // inverser le sence
    // $request = $dbconnect->prepare("SELECT id_post, likes, membre_id, text, photo, id_membre, pseudo FROM posts, membres WHERE posts.membre_id = membres.id_membre ORDER BY id_post DESC");

    // execution de la requete
    try{
        $request->execute();
        // tresformer le resultat de la requete en tableau
        $lesPoset = $request->fetchAll();
    }catch(PDOException $e){
        $lesPoset = $e->getMessage();
    }
    return $lesPoset; // retourne la liste des posts
}