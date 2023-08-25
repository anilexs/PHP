<?php 
require_once('./inc/header.php');
?>
    <div class="container">
            <h2>Formulaire de Contact</h2>

            <form action="./model/db_register.php" method="post" class="form">
                <div>
                    <div>
                        <label for="nom">firstname :</label>
                        <input type="text" id="nom" name="firstname">
                    </div>
                    <div>
                        <label for="prenom">lastname :</label>
                        <input type="text" id="prenom" name="lastname">
                    </div>
                    
                    <div>
                        <label for="mdp">mots de passe :</label>
                        <input type="password" id="mdp" name="mdp">
                    </div>

                    <div>
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email">
                    </div>

                    <div>
                        <label for="anniversaire">anniversaire :</label>
                        <input type="date" id="anniversaire" name="birthday">
                    </div>

                    <div>
                        <label for="message">Message :</label>
                        <textarea id="message" name="message" rows="4"></textarea>
                    </div>

                    <div>
                        <label>Civility :</label>
                        <div>
                            <input type="radio" name="civility" id="homme" value="homme">
                            <label for="homme">Homme</label>

                            <input type="radio" name="civility" id="femme" value="femme">
                            <label for="femme">Femme</label>
                            
                            <input type="radio" name="civility" id="Croissant" value="Croissant">
                            <label for="Croissant">Croissant</label>
                            
                            <input type="radio" name="civility" id="autre" value="autre">
                            <label for="autre">autre</label>
                        </div>
                    </div>
                    <div>
                        <label for="tel">phone : </label>
                        <input type="number" id="tel" name="phone">
                    </div>
                    <div>
                        <label for="pays">Pays :</label>
                        <select id="pays" name="pays">
                            <option value="france">France</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div>
                        <input type="checkbox" id="souscription" name="conditions" value="oui">
                        <label for="souscription">Souscrire à la newsletter</label>
                    </div>

                    <button type="submit" name="submit" class="btnSubmit">Envoyer</button>
                </div>
            </form>
        </div>
<?php
require_once('./inc/footer.php');
?>