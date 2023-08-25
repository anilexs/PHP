<?php 
require_once('./inc/header.php');
?>
    <div class="container">
            <h2>Formulaire de Contact</h2>

            <form action="./model/db_book.php" method="post" class="form">
                <div>
                    <div>
                        <label for="title">title :</label>
                        <input type="text" id="title" name="title">
                    </div>
                    
                    <div>
                        <label for="author">author :</label>
                        <input type="text" id="author" name="author">
                    </div>
                    
                    <div>
                        <label for="publish">publish :</label>
                        <input type="date" id="publish" name="publish">
                    </div>
                    
                    <div>
                        <label for="stock">stock :</label>
                        <input type="number" id="stock" name="stock">
                    </div>

                    <button type="submit" name="submit" class="btnSubmit">Envoyer</button>
                </div>
            </form>
        </div>
<?php
require_once('./inc/footer.php');
?>