<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="helpDiv">
        <img src="img/silica_help.png" alt="" id="help">
        <!-- <div class="bubble">hello dedfefefefefefefe</div> -->
    </div>
    <div class="sakura"></div>
    <script src="js/structure.js"></script>

        <button id="hellpExcla">
            <i class="fa-solid fa-exclamation exclamation"></i>
        </button>

    <div class="form">
        <form method="POST" action="traitement/action.php">
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
</body>
</html>