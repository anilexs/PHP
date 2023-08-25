<?php
require_once('../inc/function.php');
if(isset($_POST['submit'])){
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $publish = htmlspecialchars($_POST['publish']);
    $stock = htmlspecialchars($_POST['stock']);

    $db = dbConnexion();

    $request = $db->prepare("INSERT INTO book (title, author, publish, stock) VALUES (?, ?, ?, ?)");


    try {
        $request->execute(array($title, $author, $publish, $stock));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}