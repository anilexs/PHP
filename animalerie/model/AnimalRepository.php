<?php 
require_once($_SERVER["DOCUMENT_ROOT"] . "/PHP/animalerie/model/database.php");



class AnimalRepository
{
    private $id_animal;
    private $name;
    private $type;
    private $breed;

    public function __construct($name, $type, $breed)
    {
        $this->name = $name;
        $this->type = $type;
        $this->breed = $breed;
    }

    public function insert()
    {
        // Connexion à la base de données :
        $sb = new DbConnect("localhost", "animalerie", "root", "");
        $db_connect = $sb->connect();
        
        // Préparation de la requête à la bdd : 
        $request = $db_connect->prepare("INSERT INTO animal (name,type,race) VALUES(?,?,?)");

        // Executer la requête : 
        try {
            $request->execute(array($this->name, $this->type, $this->breed));
        } catch (PDOException $error) {
            $error->getMessage();
            echo $error;
        }

    }
    public function findAll(){
        // Créer une instance DbConnect
        $db = new DbConnect("localhost", "animalerie", "root", "");
        
        // se connecter à la bd
        $connexionDb = $db->connect(); // methode 1
        // $db = $dbConnect->connexioDataBase; // methode 2
        
        //préparation de la requête
        $request = $connexionDb->prepare("SELECT * FROM animal");

        //exécution de la requete
        try{ // essayer d'enregister les infos dans la table utilisateur
            $request->execute();
            $animaux = $request->fetchAll(PDO::FETCH_ASSOC);
            
            return $animaux;
        }catch(PDOException $e){
            echo $e->getMessage(); // afficher l'erreur sql généré
        }

    }
}