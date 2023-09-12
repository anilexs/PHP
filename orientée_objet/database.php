<?php 
// creer la classe DbConnect permettant de se connecter a la base de donnees
class DbConnect {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connexion;

    public function __construct($host, $database, $username, $password) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->connexion = null;
    }

    public function connect() {
        try {
            $this->connexion = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion à la base de données réussie.";
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
        return $this->connexion;
    }
}
