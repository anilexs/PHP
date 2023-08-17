<?php
include('../head.php');
?>
<body>



<?php

//isset permet de verifier si la variable existe et est différent de vide
if(isset($_POST['nom']) && isset($_POST['prenom'])   && isset($_POST['password'])  ) {
    echo '<div class="alert alert-success">Bonjour ' . $_POST['nom'] . ' '.$_POST['prenom'] .'</div>';
}else {?>

<div class="alert alert-danger" role="alert">
    Vous devez remplir tout les champs.
</div>
<?php } ?>


<?php

//empty permet de voir si la variable vide
// ! empty 
//$_GET OU $_POST

if(empty($_POST['nom']) or empty($_POST['prenom'])   or empty($_POST['password']) ) { ?>    

<div class="alert alert-danger" role="alert">
    Vous devez remplir tout les champs.
</div>

<?php 
}else {
    echo '<div class="alert alert-success" role="alert">Bonjour ' . $_POST['nom'] . ' '.$_POST['prenom']. '</div>';

}
?>



<?php

//empty permet de voir si la variable vide
// ! empty 
//$_GET OU $_POST

if(empty($_POST['nom']) or empty($_POST['prenom'])   or empty($_POST['password']) ) { ?>    

<div class="alert alert-danger" role="alert">
    Vous devez remplir tout les champs.
</div>

<?php 
}else {
    echo '<div class="alert alert-success" role="alert">Bonjour ' . $_POST['nom'] . ' '.$_POST['prenom'] . ' '. $_POST['hidden'] . '</div>';

}
?>

<a class="btn btn-primary" href="../index.php"> <--- Revenir en arrière </a>
</body>
</html>