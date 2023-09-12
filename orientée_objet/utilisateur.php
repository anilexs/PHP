<?php
// de creer la classe Utilisateur avec les proprietes:
// nom, prenom, email, mot de passe
// les methodes : s'incrire, se connecter, se deconnecter
require_once "database.php";

class User{
    private $nom;
    private $prenom;
    private $login;
    private $mdp;
    
    public function __construct($nom, $prenom, $login, $mdp){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->mdp = $mdp;
    }

    public function login(){
        $connection = new DbConnect("localhost" , "cours_db", "root", "");
        $db = $connection->connect();
        $request = $db->prepare("INSERT INTO  utilisateurs (nom, prenom, email, mdp) VALUES (?,?,?,?)");
    try{
        $request->execute(array($this->nom, $this->prenom, $this->login, $this->mdp));
    }catch (PDOException $e){
        $e->getMessage();
    }
    }
    
    public function connect(){
        $connection = new DbConnect("localhost" , "cours_db", "root", "");
        $db = $connection->connect();
        $request = $db->prepare("SELECT * FROM users WHERE email = ?");
        try{
        $request->execute(array($this->login));
        $userInfo = $request->fetch(PDO::FETCH_ASSOC); 
        
        if(empty($userInfo)){
            echo "utilisateur inconnue";
        }else{
            // verifier si le mot de passe est correct
            if(password_verify($this->mdp, $userInfo['password'])){  
                    $_SESSION['role'] = $userInfo['role']; 
                    $_SESSION['id_user'] = $userInfo['id_user'];
                    header("Location: http://localhost/PHP/hotel/user_home.php");
        }
        
    }
}catch(PDOException $e){
        $e->getMessage();
    }
    }
}
