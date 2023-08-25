<?php
require_once('../inc/function.php');
if(isset($_POST['submit'])){
    $firstname = !empty($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : null;
    $lastname = !empty($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : null;
    $mdp = htmlspecialchars($_POST['mdp']);

    $mdpCrypt = password_hash($mdp, PASSWORD_DEFAULT);

    $email = htmlspecialchars($_POST['email']);
    $birthday = !empty($_POST['birthday']) ? htmlspecialchars($_POST['birthday']) : null;
    $message = htmlspecialchars($_POST['message']);
    $civility = !empty($_POST['civility']) ? htmlspecialchars($_POST['civility']) : null;
    $conditions = isset($_POST['conditions']) ? 1 : 0;
    $phone = !empty($_POST['phone']) ? htmlspecialchars($_POST['phone']) : null;
    $country = !empty($_POST['pays']) ? htmlspecialchars($_POST['pays']) : null;

    $db = dbConnexion();

    $request = $db->prepare("INSERT INTO user (firstname, lastname, password, email, civility, country, conditions, phone, birthday, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");


    try {
        $request->execute(array($firstname, $lastname, $mdpCrypt, $email, $civility, $country, $conditions, $phone, $birthday, $message));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}