<?php
// mon code avec chat https://sharemycode.fr/3eb
//  code abram http://www.sharemycode.fr/6fb
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/PHP/hotel/inc/database.php";
if(isset($_POST['book'])){
    // recuperer les infos
    $idRoom = htmlspecialchars($_POST['id_room']);
    $startDate = htmlspecialchars($_POST['start_date']);
    $endDate = htmlspecialchars($_POST['end_date']);
    $price = htmlspecialchars($_POST['price']);
    // convertir en date
    $dateStart = strtotime($startDate);
    $dateEnd = strtotime($endDate);

    $duration = $dateEnd - $dateStart;

    $nbDays = $duration / 86400;

    $today = date("Ymd"); // la date d'aujourd'hui
    // si $today est supperieur a la date de debut de reservation ou $today est supperieur a la date de fin de reservation
    if (strtotime($today) > strtotime($startDate) || strtotime($today) > strtotime($endDate)) {
        // echo '<script>alert("Votre date de début ou de fin de réservation ne peut pas être inférieure à la date d\'aujourd\'hui");</script>';
        echo '<script>window.location.href = "http://localhost/PHP/hotel/booking.php?room='.$idRoom.'&price='.$price.'";</script>';
        // header("Location : http://localhost/PHP/hotel/bookingphp");
    } else {
        // se connecter a la bd
        $db = dbConnexion();
        // preparer la requete pour verifier si la chambre est dispo entre la date de depart et la date de fin
        $request = $db->prepare("SELECT * FROM bookings WHERE room_id = ? AND ((booking_start_date <= ? AND booking_end_date >= ?) OR (booking_start_date <= ? AND booking_end_date >= ?))");
        // executer la requete
        try{
            $request->execute(array($idRoom, $startDate, $startDate, $endDate, $endDate));
            // recuperer le resultat
            $books = $request->fetch();
            if(empty($books)){
                if($startDate < $endDate){
                    // preparer la requete pour reserver la chambre
                    $request = $db->prepare("INSERT INTO `bookings`(`booking_start_date`, `booking_end_date`, `user_id`, `room_id`, `booking_price`, `booking_state`) VALUES (?,?,?,?,?,?)");
                    // executer la requete
                    try{
                        $request->execute(array($startDate, $endDate, $_SESSION['id_user'], $idRoom, $price * $nbDays, "in progress"));
                        // rediriger vers user_home.php
                        header("Location: http://localhost/PHP/hotel/user_home.php");
                    }catch(PDOException $e){
                        echo $e->getMessage();
                    }
                }
            }else{
                echo "Chambre pas disponible a cette date";
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

}

if(isset($_GET['idbook'])){
    // se connecter a la db
    $db = dbConnexion();
    // preparer la requete pour annuler la reservation
    $request = $db->prepare("UPDATE bookings SET booking_state = ? WHERE id_booking = ?");
    // executer la requete
    try{
        $request->execute(array("cancel", $_GET['idbook']));
        // redirection vers user_home.php
        header("Location: http://localhost/PHP/hotel/user_home.php");
    }catch(PDOException $e){
        $e->getMessage();
    }
}