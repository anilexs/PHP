<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"]."/PHP/hotel/inc/database.php";
if(isset($_POST['book'])){
    // recuperer les info
    $id_room = htmlspecialchars($_POST['id_room']);
    $start_date = htmlspecialchars($_POST['start_date']);
    $end_date = htmlspecialchars($_POST['end_date']);
    $price = htmlspecialchars($_POST['price']);
    // convertir en date
    $startDate = strtotime($start_date);
    $endDate = strtotime($end_date);

    $duration = $endDate - $startDate;
    
    // echo $duration;
    $nb_day = $duration / 86400;
    echo $nb_day;
    die;
    


    // se connect a la db
    $db = dbConnexion();
    // preparer la requete pour verifier si la chambre est dispo entre la date de depart et la date de fin
    $request = $db->prepare("SELECT * FROM bookings WHERE room_id = ? AND booking_start_date = ? AND booking_end_date = ?");
    // executer la requete
    try{
        $request->execute(array($id_room, $start_date, $end_date));
        $books = $request->fetchAll();
    print_r($books);      
    if(empty($books)){
        if($start_date < $end_date){
            // preparer la requte pour reserver la chambre
            $request = $db->prepare("INSERT INTO bookings(booking_start_date, booking_end_date, user_id, room_id, booking_price, booking_state) VALUES (?, ?, ?, ?, ?, ?)");    
        }
    }
    }catch(PDOException $e){
        $e->getMessage();
    }    
}