<?php
session_start();
require_once "../../model/userModel.php";
require_once "../../model/bookModel.php";
if(isset($_POST['inscription'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    // hasher le mot de passe
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    // apeler la methode inscription de la classe User
    // la methode inscription etant static donc on utilise le nom de la classe suivit de "::" ensuite le nom de la methode qui est inscription
    User::inscription($name, $email, $passwordHash);
}

// pour la connexion
if(isset($_POST['login'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    // apeler la methode connexion de la classe User
    // la methode inscription etant static donc on utilise le nom de la classe suivit de "::" ensuite le nom de la methode qui est connexion
    User::connexion($email, $password);
}


// pour l'ajout d'un livre
if(isset($_POST['add'])){
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $publication = htmlspecialchars($_POST['publication']);
    
    Book::addBook($title, $author, $publication);
}

// pour l'emprunt d'un livre
if(isset($_GET['book'])){
    // identifiant du livre a emprunter
    $book = $_GET['book'];
    // on recupere l'identifiant de l'utilisater connecté
    $id_user = $_COOKIE['id_user'];
    // appel de la methode borrowBook
    Book::borrowBook($id_user, $book);
}

// pour rendre un livre
if(isset($_GET['borrow'])){
    // identifiant de l'emprunt
    $borrow = $_GET['borrow'];
    $bookId = $_GET['bookid'];
    // appel de la methode returnBook
    Book::returnBook($borrow, $bookId);
}