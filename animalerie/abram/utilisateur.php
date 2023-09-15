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
    
        public static function connexion($email, $mdp)

    {

        $connection = new DbConnect("localhost", "cours_db", "root", "");
        $db = $connection->connect();
        // Préparer la requête :
        $request = $db->prepare('SELECT * FROM utilisateurs WHERE email = ?');

        try {
            $request->execute(array($email));
            $user = $request->fetch(PDO::FETCH_ASSOC);
            if (empty($user)) { // Si $user est vide
                echo "Utilisateur inconnu";
            } else {
                if (password_verify($mdp, $user["mdp"])) {
                    $_SESSION['prenom'] = $user["prenom"];
                    header("Location: ../user_page.php");
                } else {
                    echo "mauvais mdp petit malin";
                }
            }
        } catch (PDOException $error) {
            $error->getMessage();
        }
        return $user;
    }
}
