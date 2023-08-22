<?php
require_once 'database.php';
// etablir la connexion avec la base de donnees
$db = dbConnexion();
// preparation de la requette
$request = $db->prepare("SELECT * FROM utilisateurs");
// executer la requete
try{
    $request->execute(); 
    $users = $request->fetchAll(PDO::FETCH_ASSOC);
    // pour avoir uniquement un tableau associatif dans le fetchAll mette PDO::FETCH_ASSOC
}catch(PDOException $e){
    $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>NOM</th>
                <th>Prenom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($users as $u){ ?>
                <!-- afficher les informations des utilisateur dans tableau html -->
                    <tr>
                        <td><?= $u['nom']; ?></td>
                        <td><?= $u['prenom']; ?></td>
                        <td><?= $u['email']; ?></td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>