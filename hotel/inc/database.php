<?php 

function dbConnexion(){
    $connexion = null;
    $host = "localhost";
    $nam = "hotel_db";
    $root = "root";
    $admin = "";
    try{
        $connexion = new PDO("mysql:host=$host;dbname=$nam", $root, $admin);
    }catch (PDOException $e){
        $e->getMessage();
    }
    return $connexion;
}