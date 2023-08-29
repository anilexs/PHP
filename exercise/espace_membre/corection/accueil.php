<?php
    session_start(); // a mettre avant le html c'est pour demarer une session
    require_once 'fonction.php';
    echo $_COOKIE['id_user'];
    // if(!(isset($_SESSION['id']))){ // si il n y a pas de session active 
    if(!(isset($_COOKIE['id_user']))){ // si il n y a pas de session active 
        header("Location: connexion.php"); // rediriger vers le formulaire de connexion
    }
    $listPost = getPost(); // recuperer la liste des posts
    // echo "<pre>";
    // print_r($listPost);
    // echo "<pre>";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include_once "nav.php"; ?>
        <div id="post">
            <?php foreach($listPost as $post){?>
                <div class="posts">
                    <div class="postimg">
                        <img src="post_img/<?= $post['photo']; ?>" alt="" class="imgpost">
                    </div>
                    <div class="txt">
                        <p>cree par : <?= $post['pseudo']; ?></p>
                        <p><?= $post['text']; ?></p>
                        <div>
                            <span><?= $post['likes']; ?></span>
                            <a href="traitement.php?idpost=<?= $post['id_post']; ?>" class="likebtn"><i class="fa-solid fa-heart heart"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>