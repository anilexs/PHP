<?php
function dbConnexion(){
    $connexion = null;
    $host = 'localhost';
    $dbName = 'biblio';
    $identify = 'root';
    $password = '';
    try{
        $connexion = new PDO("mysql:host=$host;dbname=$dbName", $identify, $password);
    }catch (PDOException $e){
        $connexion = $e->getMessage();
    }
    return $connexion;      
}