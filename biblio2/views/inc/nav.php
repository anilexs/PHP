<nav>
    <a href="http://localhost/PHP/biblio2/home">Home</a>
    <?php 
        if(isset($_COOKIE['user_role']) && $_COOKIE['user_role'] == "admin"){ ?>
                <a href="http://localhost/PHP/biblio2/add_book">Add Book</a>
            <?php }else{ ?>
                <a href="http://localhost/PHP/biblio2/logs">Log</a>
        <?php } ?>
</nav>