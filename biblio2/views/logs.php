<?php
require_once "../model/userModel.php";
$borrowList = User::borrowLog($_COOKIE['id_user']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PHP/biblio2/views/assets/css/log.css">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>start date</th>
                <th>End Date</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($borrowList as $borrow){ ?>
                <tr>
                    <td><?= $borrow['id_borrow']; ?></td>
                    <td><?= $borrow['start_date']; ?></td>
                    <td><?= $borrow['end_date']; ?></td>
                    <td><?= $borrow['title']; ?></td>
                    <?php if($borrow['end_date'] == null){ ?>
                        <td><a href="model/action.php?borrow=<?=$borrow['id_borrow']?>&bookid=<?= $borrow['book_id']; ?>">rendre le livre</a></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>