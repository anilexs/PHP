<?php
    if(isset($_SESSION['id'])){?>
        <nav>
            <a href="post.php" class="post">publier</a>
            <div class="flex">
                <div class="profil">
                    <!-- on pe aussi fair en sort que le < ? php soi echo on pe le renplacer apr < ?= -->
                    <img src="img/<?php echo $_SESSION["img"]; ?>" alt="profil">
                </div>
                <form method="post">
                    <button class="logout" name="logout">Deconnexion</button>
                </form>
            </div>
        </nav>
   <?php }else{?>
       <nav>
           <button><a href="connexion.php">Connexion</a></button>
       </nav>
   <?php } ?>

   <?php
        if(isset($_POST['logout'])){
            session_destroy();
            // header a eviter si posible priviliger la navigation par js
            // header("Location: connexion.php");
            echo"<script>location.href='connexion.php'</script>";
        }
   ?>