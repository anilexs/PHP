<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/PHP/hotel/inc/database.php";
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

function roomlist(){
    // se connecter a la db ( data base ) ou bd ( base de donnees)
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM rooms");
    // executer la requete
    $roomlist = null;
    try{
        $request->execute();
        // recuperer le resulta dans un tableau
        $roomlist = $request->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        $e->getMessage();
    }

    return $roomlist;
}

function userBookList($idUser){
    // se connecter a la db ( data base ) ou bd ( base de donnees)
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM bookings WHERE user_id = ? AND booking_state = ?");
    // executer la requete
    $userBookList = null;
    try{
        $request->execute(array($idUser, "in progress"));
        // recuperer le resulta dans un tableau
        $userBookList = $request->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        $e->getMessage();
    }

    return $userBookList;
}
