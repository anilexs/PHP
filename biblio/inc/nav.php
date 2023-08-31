<?php if(isset($_SESSION['id'])){?>
    <nav>
        <form action="model/security.php" method="post">
            <button name="logout">deco</button>
        </form>
    </nav>
<?php }else{?>
    
<?php } ?>