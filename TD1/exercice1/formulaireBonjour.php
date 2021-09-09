
<?php

$message = 'Bonjour à toi';

echo '<form action="formulaireBonjour.php" method="post">
     <p>Votre prénom : <input type="text" name="prenom"></p>
     <p>Votre nom : <input type="text" name="nom"></p>
     <p><input type="submit" name="submit" value="Submit"></p>
     </form>';

if(!empty($_POST['submit'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    echo '<p>' .$message . ' ' . $prenom . ' ' . $nom . '</p>';
}


