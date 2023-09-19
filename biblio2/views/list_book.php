<?php
require_once "../model/bookModel.php";

$listBook = Book::listBook();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PHP/biblio2/views/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php require_once "inc/nav.php"; ?>
    <div class="container">
        <?php foreach($listBook as $book){?>
            <div class="book">
                <h1><?= $book['title'] ?></h1>
                <h2><?= $book['author'] ?></h2>
                <p><?= $book['publication'] ?></p>
                <?php if($book['state'] == "available"){?>
                    <a href="model/action.php?book=<?= $book['id_book']; ?>">Borrow This book</a>
                <?php }?>
            </div>
        <?php } ?>
    </div>
</body>
</html>