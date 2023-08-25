<?php
require_once('./inc/db_connection.php');
require_once('./inc/header.php');

$db = dbConnexion();
$request = $db->prepare("SELECT * FROM user");
try{
    $request->execute(); 
    $users = $request->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    $e->getMessage();
}
?>
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
                    <tr>
                        <td><?= $u['firstname']; ?></td>
                        <td><?= $u['lastname']; ?></td>
                        <td><?= $u['email']; ?></td>
                        <td><?= $u['civility']; ?></td>
                        <td><?= $u['country']; ?></td>
                        <td><?= $u['phone']; ?></td>
                        <td><?= $u['birthday']; ?></td>
                        <td><?= $u['message']; ?></td>
                        <td><?= $u['conditions']; ?></td>
                        <td><?= $u['role']; ?></td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
require_once('./inc/footer.php');
?>