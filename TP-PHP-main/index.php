<?php
include('head.php');
?>
<body>
    <?php 

    if(isset($_POST['name'])){


        var_dump($_POST['name']);
    }

          
           /* The code snippet is declaring and initializing variables. */
            echo '<p>Bonjour tout le monde</p>';
            $prenom= "Karima"; // string
            $nom =  "DUPONT"; // string 
            $number = 100; // int 
            $num2 = 1.4; //float 
            $bool = true; //boolean 

            $age = 28;
            $tab = [
                'nom'=> 'test',
                'prenom'=> 'test',
            ]; // array

            $somme = $number+ $num2;


            echo 'Age avant modification ' . $age;
           $increment =  $age ++; // $age= $age+1
           $decrement =  $age --; // $age= $age-1
           echo 'Age après modification ' . $age;



           // POST INCREMENT ET Pre-décrémentation

           echo '<h3>Post-incrémentation</h3>';
           $a = 5;
           echo "Devrait valoir  5: " . $a++ . "<br />\n";
           echo "Devrait valoir  6: " . $a . "<br />\n";
           echo '<h3>Pre-incrémentation</h3>';
           $a = 5;
           echo "Devrait valoir  6: " . ++$a . "<br />\n";
           echo "Devrait valoir  6: " . $a++ . "<br />\n";
           echo "Devrait valoir  7: " . $a . "<br />\n";
           echo '<h3>Post-décrémentation</h3>';
           $a = 5;
           echo "Devrait valoir  5: " . $a-- . "<br />\n";
           echo "Devrait valoir  4: " . $a . "<br />\n";
           echo '<h3>Pre-décrémentation</h3>';
           $a = 5;
           echo "Devrait valoir  4: " . --$a . "<br />\n";
           echo "Devrait valoir  4: " . $a . "<br />\n";



           // UTILISATION DE IF EN BOUCLE 

           $i =20;
           /*
                if ($i == 0) {
                    echo "i égal 0";
                } elseif ($i == 1) {
                    echo "i égal 1";
                } elseif ($i == 2) {
                    echo "i égal 2";
                }
        */

        //SWITCH 

      
        $operation ="connexion";
        
        echo 'Le nombre de mot est : ' . strlen($operation) .'<br/> <br/>';


        //strlen($operation) : strlen nous permet de connaitre la taille d'un mot (string)

        //UTILISATION DES SWITCH EN FONCTION DE LA VALEUR DE LA VARIABLE $operation
        switch ($operation) {
            case "inscription":
                echo  "formulaire inscription";
                break;
            case "connexion":
                echo  "formulaire de connexion";
                break;
            case "mdp":
                echo  "Page de mot de passe";
                break;
                default:
                echo "<h2>Bienvenue sur le site </h2>";
        }


            //echo 'Bonjour '. $prenom. ' ' . $nom;

            //echo 'la somme est de  : '. $number . ' + '.$num2 . ' est égale à : ' . $somme;

    
            if($age >  18) {
                echo  '<p  class ="success">vous pouvez suivre </p>';

            }elseif($age ===  18) {
                echo  '<p  class ="success">Vous etes encore jeune</p>';
            }else {
                echo  '<p  class ="text">vous ne pouvez pas suivre</p>';
            }

            $tab =['test', 'test2', 'test3']; 
            $tab2 =array();// array
            $val = null;
    
            /* --------------------------------

            */
            // COMMENTAIRE SUR UNE LIGNE 
            /*
                COMMENTAIRE SUR PLUSIEUR LIGNE 
            */

            $etudiants = ['papa'=>"toto", "tata" ,"toni", "amelie"];


            // CONNAITRE LA TAILLE DE MON TABLEAU 

            /*
            $size = count($etudiants); //
            var_dump($size,$etudiants);
            echo  '<br/>La taille du tableau est : ' .$size ;
            */


            // UTILISATION DE foreach ET DE IF 

            foreach ($etudiants as $cle => $value) {
                echo 'Bienvenue agent 00'. $cle . '  ' .  $value . '<br/>';
            }

            $data = ['Hillary'=> 'Nyakundi', 'Lary' => 'Mak' ];
    ?>



<table border="1">
  <tr>
    <th>Prénom</th>
    <th>Nom</th>
  </tr>

  <?php foreach($data as $nom=> $prenom) {?>
    <tr>
        <td><?php echo $nom ; ?> </td>
        <td><?php echo $prenom ; ?></td>
  </tr>
   <?php }?> 
</table>

   <br><br><br>

-------------------------————-----------------------------
<table border="1">
   <tr>
    <th>Prénom</th>
    <th>Nom</th>
  </tr>

   <?php 
foreach($data as $nom=> $prenom) {
    echo  '<tr>
            <td>'.$nom .' </td>
            <td>'. $prenom .'</td>
        </tr>';

}

echo '</table>'
?>
   




   <table border="2">
  <tr>
    <th>Prénom</th>
    <th>Nom</th>
  </tr>
<?php foreach($data as $nom=>$prenom) {?>
  <tr>
   <td><?= $nom ?></td>
   <td><?= $prenom ?></td>
  </tr>

<?php } ?> 
<br/>

</table>



<?php 

// UTILISATION DE FOR SUR UN TABLEAU 

$etudiantsFor = ["toto", "tata" ,"toni", "amelie"];

echo  $etudiantsFor[1] . '<br/>';


for ($i = 0; $i < count($etudiantsFor) ; $i++) {
    echo $i .' ' . $etudiantsFor[$i] . '<br/>';
}


echo '--------------------------------------------';
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

?>
--—------------—--------------------------------------------


<br/><br>








<table border="2">
  <tr>
    <th>Prénom</th>
    <th>Nom</th>
  </tr>

  <?php for ($i = 0; $i < count($etudiantsFor) ; $i++) { ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $etudiantsFor[$i] ?></td>
  </tr>

  <?php }?>

</table>

<?php

//FORMULAIRE SUR php

//CRUD  => create, update , read delete 


//POST  =>  pour récuperer une information depuis le formulaire 
//GET => pour récupérer information depuis l'url
//PUT  Modification 


?>

<br>
<div class="container">





    <form method="POST" action="traitement/action.php">
            <label for=""> Nom </label>
            <input name="nom" class="form-control"  type="text" placeholder="Entrer le nom"> <br>

            <br>
            <label for=""> Prénom </label>
            <input name="prenom" class="form-control" type="text" placeholder="Entrer le prénom">  <br>

            <br>
            <label for=""> Mot de passe  </label>
            <input name="password"  class="form-control" type="password" placeholder="Entrer le mot de pass">  <br>

            <input type="hidden" value="Une information caché" name="hidden" />
            <br>

            <input type="submit" value="Sauvegarder" class="btn btn-secondary">
        </form>


</div>
       






<style>

    .text {
        color: red ;
    }
    .success {
        color:chartreuse;
    }
</style>
</body>
</html>