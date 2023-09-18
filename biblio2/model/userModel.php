<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/PHP/biblio2/model/database.php';
class user{
    // methode pour s'inscrire
    public static function inscription($name, $email, $password){
        // connexion a la bd
        $db = Database::dbConnect();
        // preparation de la requete
        $request = $db->prepare("INSERT INTO users (name, email, password) VALUE (?, ?, ?)");
        try{
            $request->execute(array($name, $email, $password));
            // rediriger vers la page login.php
            header("Location: http://localhost/PHP/biblio2/login"); 
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    // methode pour se connecter
    public static function connexion($email, $password){
        // se connecter a la bd
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM users WHERE email = ?");
        try{
            $request->execute(array($email));
            // recuperer le resultat de la requete dans un tableau
            $user = $request ->fetch();
            //  verifier si le mot de passe est correct
            if(empty($user)){
                header("location:". $_SERVER['HTTP_REFERER']);
                $_SESSION['error_message'] = "Cet email n'existe pas";
            }else if(password_verify($password, $user['password'])){
                // il a taper le bon mail et le bon mot de passe
                setcookie("id_user",  $user['id_user'], time() + 96400, "/", "http://localhost/PHP/biblio2/", false, true);
                // il a taper le bon mail et le bon mot de passe
                setcookie("user_role",  $user['role'], time() + 96400, "/", "http://localhost/PHP/biblio2/", false, true);
                // $_SESSION['user_role'] = $user['role']
                header("Location: http://localhost/PHP/biblio2/list_book.php");
            }else{
                $_SESSION['error_message'] = "Mot de passe incorrect";
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    // methode pour se deconnecter
    public static function logout(){

    }
    // methode pour emprunter un livre
    public static function borrow(){

    }
    // methode pour se desinscrire
    public static function deletAccount(){

    }
}