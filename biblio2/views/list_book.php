<?php
// session_start();
require_once "../model/userModel.php";
if(isset($_COOKIE['user_role'])){
    echo "bienvenue ".$_COOKIE['user_role'];
}

// if(isset($$_SESSION['user_role'])){
//     echo "bienvenue ".$_COOKIE['user_role'];
// }