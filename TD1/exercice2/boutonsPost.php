<?php

echo '<form action="boutonsPost.php" method="post">
     <p>Nombre de boutons : <input type="number" name="nombre"></p>
     <p><input type="submit" name="submit" value="Generate buttons"></p>
     </form>';

if(!empty($_POST['submit'])) {
    $nb = $_POST['nombre'];
    $tab = [];
    for ($i = 0; $i < $nb; $i++) {
        $tab[$i] = '<p><input type="button" name="button" value="Button"></p>';
    }

    foreach ($tab as $value) {
        echo $value;
    }
}