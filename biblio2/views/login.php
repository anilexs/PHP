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
    <link rel="stylesheet" href="http://localhost/PHP/biblio2/views/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="model/action.php" method="post">        
        <div>
            <label for="">Email</label>
            <input type="email" name="email" id="">
        </div>
        
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="">
        </div>
        <?php if(isset($_SESSION['error_message'])){?>
            <p style="color: gray;"><?= $_SESSION['error_message'];?></p>
        <?php 
            unset($_SESSION['error_message']);
            // session_destroy(); 
        }?>
        <button name="login">se connecter</button>
    </form>
</body>
</html>