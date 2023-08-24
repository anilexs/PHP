<?php

require_once('./inc/header.php');
?>
    <div class="contenaire">
        <header>
            <a href="inscription.php" id="login">inscription</a>
        </header>
        <form action="traitement_co.php" method="post" enctype="multipart/form-data" id="form">
            <div class="input">
                <input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo"> <br>
                <input type="password" placeholder="Mot de passe" name="mdp" id="mdp"> <br>
                <input type="submit" name="submit" value="s'inscrire" id="submit">
                <input type="reset" value="reset" id="reset">
            </div>
        </form>
        <div class="errer">
        </div>
    </div>
<?php
require_once('./inc/footer.php');
?>