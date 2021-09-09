<?php

$nb = $_GET['nombre'];
$tab = [];
for ($i = 0 ; $i < $nb ; $i++ ){
    $tab[$i] =  '<p><input type="button" name="button" value="Button"></p>';
}

foreach ($tab as $value) {
    echo $value;
}