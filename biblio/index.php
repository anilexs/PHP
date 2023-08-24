<?php

require_once('./inc/function.php');
require_once('./inc/header.php');
?>
<div class="container">
        <div class="form">
        <form method="POST" action="traitement.php">
            <label for="nam">First name</label>
            <input id="nam" type="text" placeholder="First nam" name="firstname"><br>

            <label for="nam2">last name</label>
            <input id="nam2" type="text" placeholder="last nam" name="lastname"> <br>
            
            <label for="mdp">password</label>
            <input id="mdp" type="password" placeholder="password" name="mdp"> <br>

            <label for="mail">E-mail</label>
            <input id="mail" type="email" placeholder="mail" name="email"> <br>

            <label for="genre">sex :</label>
            <select name="genre" id="genre" class="red">
              <option value="">--Please choose an option--</option>
              <option value="Homme">Homme</option>
              <option value="Famme">Famme</option>  
              <option value="Croissant">Croissant</option>
              <option value="autre">autre</option>
            </select>
            
            <div class="radio">
                <input type="radio" name="radio" id="France" name="radio">
                <label for="France">France</label>

                <input type="radio" name="radio" id="Espagne" name="radio">
                <label for="Espagne">Espagne  </label>

                <input type="radio" name="radio" id="Anglais" name="radio">
                <label for="Anglais">Anglais</label>
            </div>
            <div class="chekbox">
                <input type="checkbox" name="checkbox" id="conditions">
                <label for="conditions">accepter les conditions d'utilisation</label>
            </div>
            <label for="number">numero de tel</label><input type="number" id="number" name="number"> <br>
            <input type="date" name="date"> <br>
            <textarea name="message" id="" cols="50" rows="10"></textarea>
            <input type="submit" id="submit">
           <button id="google" class="btn"><img class="img1" src="img/google.png" alt="">   sincrire avec google</button>
        </form>
    </div>
<?php
require_once('./inc/footer.php');
?>