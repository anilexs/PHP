<?php if(isset($_SESSION['id'])){?>
    <nav>
        <div>
            <form action="model/security.php" method="post">
                <button name="logout" class="logout">deconexion</button>
            </form>
        </div>
    </nav>
<?php }else{?>
    <nav>
        <a href="../connexion.php"></a>
    </nav>
<?php } ?>