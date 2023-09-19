<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/PHP/biblio2/model/database.php';
class Book{
    // methode pour enregistrer un livre
    public static function addBook($title, $author, $publication){
        // seconnecter a la data base
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("INSERT INTO books (title, author, publication) VALUES (?,?,?)");
        // execution de la requete
        try{
            $request->execute(array($title, $author, $publication));
            header("Location: http://localhost/PHP/biblio2/list_book");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    // methode pour recuperer la list des livres
    public static function listBook(){
        // se connecter a la data base
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM books");
        // executer la requete
        try{
            $request->execute(array());
            // recuperer le resultat de la requete dans un tableau listBook
            $listBook = $request->fetchAll();
            return $listBook;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    // methode pour enprunter un livre
    public static function borrowBook($user, $book){
        // se connecter a la base de donnees
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("INSERT INTO borrows (start_date, user_id, book_id) VALUES (NOW(),?,?)");
        // executer la request
        try{
            $request->execute(array($user, $book));
            // requete pour mettre le statut du livre a unavailable
            $request1 = $db->prepare("UPDATE books SET state = ? WHERE id_book = ?");
            // executer la requete
            try{
                $request1->execute(array("unavailable", $book));
                header("Location: http://localhost/PHP/biblio2/logs");
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    //  methode pour rendre un livre
    public static function returnBook($borrow, $bookId){
        // connexion a la bd
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("UPDATE borrows SET end_date = NOW() WHERE id_borrow = ?");
        // executer la requete
            try{
                $request->execute(array($borrow));
                // la requete pour metre a jour le livre a available
                $request1 = $db->prepare("UPDATE books SET state = ? WHERE id_book = ?");
                try{
                    $request1->execute(array("available", $bookId));
                    header("Location: http://localhost/PHP/biblio2/logs");
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
            }catch(PDOException $e){
                echo $e->getMessage();
            }
    }
}