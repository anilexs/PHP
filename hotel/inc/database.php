<?php 

function dbConnexion(){
    $connexion = null;
    $host = "localhost";
    $nam = "id21228693_db_hotel";
    $root = "id21228693_admin";
    $admin = "P@sser123";
    try{
        $connexion = new PDO("mysql:host=$host;dbname=$nam", $root, $admin);
    }catch (PDOException $e){
        $e->getMessage();
    }
    return $connexion;
}