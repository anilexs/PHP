<?php
class CompteBancaire{
    // declarer les proprietes normales
    private $numero;
    private $nom;
    private $solde;
    // declarer une propriete statique
    public static $nombreDeCompte = 0;

    private static $comptes = []; 

    // le constructeur
    public function __construct($solde, $nom){
        // pour manipuler une propriete statique dans la classe on utilise le mot cle self suivi des "::"
        self::$nombreDeCompte++;
        $this->numero = "FR 76 00".self::$nombreDeCompte;
        self::$nombreDeCompte;
        $this->solde = $solde;
        $this->nom = $nom;
        self::$comptes[$this->numero] = $this;
    }

    // creer un geter qui permet de recuperer le numero de compte
    public function getNumero(){
        return $this->numero;
    }

    public function deposer($montant){
        $this->solde += $montant;
        echo $this->solde. "<br>";
    }
    
    public function retirer($montant){
        $this->solde -= $montant;
        echo $this->solde. "<br>";
    }
    
    public function transferer($montant, $numeroDestinataire) {
        if (isset(self::$comptes[$numeroDestinataire])) {
            $destinataire = self::$comptes[$numeroDestinataire];
        } else {
            return null;
        }

        if ($destinataire !== null) {
            if ($montant > 0 && $montant <= $this->solde) {

                $this->solde -= $montant;
                $destinataire->deposer($montant);
                echo "Transfert de $montant euros effectué avec succès.\n";
            } else {
                echo "Le montant de transfert n'est pas valide.\n";
            }
        } else {
            echo "Le compte destinataire avec le numéro $numeroDestinataire n'existe pas.\n";
        }
    }
}
// chaque compte bancaire est prefixe par cette chaine de caractere "FR 76 00"
// creer un compte 
$compte1 = new CompteBancaire(10, "Alin Mansita");
$compte2 = new CompteBancaire(10, "Wassila Boukedroun");
$compte1->deposer(50);
$compte1->deposer(50);
$compte1->retirer(50);
$compte1->transferer(50, $compte2->getNumero());
$compte2->deposer(10);
// echo $compte1->getNumero();
// echo $compte2->getNumero();

// de creer une methode deposer qui prend 1 parametre : montant a deposer pour ajouter la somme dans le compte concerne

// une methode retirer qui prend 1 parametre: le montant a retirer elle permet de retirer le montant du compte concerne

// une methode transferer qui prend 2 parametres le numero de compte destinataire, le montant elle permet de transferer un montant d'un compte a un autre


// corection
// corection = https://www.sharemycode.fr/dqr

class CompteBancaire{
    // declarer les proprietes normales
    private $numero;
    private $nom;
    private $solde;
    // declarer une propriete statique
    public static $nombreDeCompte = 0;
    public static $listCompte = [];
    // le constructeur
    public function __construct($solde, $nom){
        // pour manipuler une propriete statique dans la classe on utilise le mot cle self suivi des "::"
        self::$nombreDeCompte++;
        $this->numero = "FR 76 00".self::$nombreDeCompte;
        $this->solde = $solde;
        $this->nom = $nom;
        array_push(self::$listCompte, $this);
    }

    // creer un geter qui permet de recuperer le numero de compte
    public function getNumero(){
        return $this->numero;
    }
    // 
    public function deposer($montant){
        $this->solde+=$montant;
    }
    // 
    public function retirer($montant){
        $this->solde-=$montant;
    }
    // 
    public function transferer($numero, $montant){
        foreach(self::$listCompte as $compte){
            if($compte->numero == $numero){
                $compte->solde+=$montant;
                $this->solde-=$montant;
                return;
            }
        }
    }

    public function getSolde(){
        return $this->solde;
    }


}
// chaque compte bancaire est prefixe par cette chaine de caractere "FR 76 00"
// creer un compte 
$compte1 = new CompteBancaire(10, "Alin Mansita");
// echo $compte1->getNumero()."<br>";
$compte2 = new CompteBancaire(100, "Wassila Boukedroun");
// echo $compte2->getNumero();
$compte2->transferer($compte1->getNumero(), 50);
echo $compte1->getSolde();


class CompteBancaire{
    // declarer les proprietes normales
    private $numero;
    private $nom;
    private $solde;
    // declarer une propriete statique
    public static $nombreDeCompte = 0;
    public static $listCompte = [];
    // le constructeur
    public function __construct($solde, $nom){
        // pour manipuler une propriete statique dans la classe on utilise le mot cle self suivi des "::"
        self::$nombreDeCompte++;
        $this->numero = "FR 76 00".self::$nombreDeCompte;
        $this->solde = $solde;
        $this->nom = $nom;
        array_push(self::$listCompte, $this);
    }

    // creer un geter qui permet de recuperer le numero de compte
    public function getNumero(){
        return $this->numero;
    }
    // 
    public function deposer($montant){
        $this->solde+=$montant;
    }
    // 
    public function retirer($montant){
        $this->solde-=$montant;
    }
    // 
    public function transferer($numero, $montant){
        foreach(self::$listCompte as $compte){
            if($compte->numero == $numero){
                $compte->solde+=$montant;
                $this->solde-=$montant;
                return;
            }
        }
    }

    public function getSolde(){
        return $this->solde;
    }


}
// chaque compte bancaire est prefixe par cette chaine de caractere "FR 76 00"
// creer un compte 
$compte1 = new CompteBancaire(10, "Alin Mansita");
// echo $compte1->getNumero()."<br>";
$compte2 = new CompteBancaire(100, "Wassila Boukedroun");
// echo $compte2->getNumero();
$compte2->transferer($compte1->getNumero(), 50);
echo $compte1->getSolde();
