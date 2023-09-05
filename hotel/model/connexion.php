<?php
session_start();
require_once "../inc/database.php";
if(isset($_POST['submit'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    // etablir la connexion avec la bd
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("SELECT * FROM users WHERE email = ?");
    // executer la requete
    try{
        $request->execute(array($email));
        // recperer le resultat de la requete
        // le resulta d'une requete est toujours un objet
        $userInfo = $request->fetch(PDO::FETCH_ASSOC); 
        
        if(empty($userInfo)){
            echo "utilisateur inconnue";
        }else{
            // verifier si le mot de passe est correct
            if(password_verify($password, $userInfo['password'])){  
                
                // si l'utilisateur est un admin
                if($userInfo['role'] == "admin"){
                    // definir la variabe de session role
                    $_SESSION['role'] = $userInfo['role']; 
                    header("Location: http://localhost/PHP/hotel/admin/admin.php");
                }else{
                    // definir la variabe de session role   
                    $_SESSION['role'] = $userInfo['role']; 
                    $_SESSION['id_user'] = $userInfo['id_user'];
                    header("Location: http://localhost/PHP/hotel/user_home.php");
                }
            }else{
                echo "Ahhh tu fais le malin";
            }
        }
        
    }catch(PDOException $e){
        $e->getMessage();
    }
}