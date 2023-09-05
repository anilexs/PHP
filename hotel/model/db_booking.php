<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/PHP/hotel/inc/database.php";
if(isset($_POST['room'])){
    // se connect a la db
    $db = dbConnexion();

    try{
        
    }catch(PDOException $e){
        $e->getMessage();
    }    
}