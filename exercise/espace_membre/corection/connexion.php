<?php 
    session_start(); 
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include_once "nav.php" ?>
    <div class="container">
        <form action="traitement.php" method="post">
                <?php if(isset($_SESSION['error'])){?>
                    <p><?= $_SESSION['error']; ?></p>
                <?php } unset($_SESSION['error']); ?>
                
                <?php if(isset($_SESSION['erreurmdp'])){?>
                    <p><?= $_SESSION['erreurmdp']; ?></p>
                <?php } unset($_SESSION['erreurmdp']); ?>
                <div>
                    <input type="text" name="pseudo" placeholder="Votre pseudo">
                </div>
                <div>
                    <input type="password" name="mdp" placeholder="Votre mots de passe">
                </div>
                    <button name="connexion">Se co</button>
                </div>
            </form>
    </div>
</body>
</html>