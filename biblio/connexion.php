<?php 
require_once('./inc/header.php');

?>
    <div class="container">
            <h2>Formulaire de Contact</h2>

            <form action="./model/security.php" method="post" class="form">
                <div>
                    
                    <div>
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email">
                    </div>

                    <div>
                        <label for="mdp">mots de passe :</label>
                        <input type="password" id="mdp" name="mdp">
                    </div>

                    <button type="submit" name="submit" class="btnSubmit">Envoyer</button>
                </div>
            </form>
        </div>
<?php
require_once('./inc/footer.php');
?>