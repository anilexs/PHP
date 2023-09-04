<?php
require_once "../inc/database.php";
function hotelList(){
    // se connecter a la db ( data base ) ou bd ( base de donnees)
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM hotels");
    // executer la requete
    $listHotel = null;
    try{
        $request->execute();
        // recuperer le resulta dans un tableau
        $listHotel = $request->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        $e->getMessage();
    }

    return $listHotel;
}