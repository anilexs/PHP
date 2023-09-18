<?php
class Database{
    // une methode static est une methode qu'on peut executer sans instancer la classe dans laquelle elle est implementee
    // Database::dbConnect();
    public static function dbConnect(){
        $conn = null;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=bibilio_db", "root", "");
        }catch(PDOException $e){
            $e->getMessage();
        }
        return $conn;
    }
}