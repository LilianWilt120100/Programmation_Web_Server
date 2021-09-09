<?php
session_start();

if(!isset($_SESSION['counter']))
    $_SESSION['counter']  = 0;

$_SESSION['counter']++;

echo 'Vous avez vu ' . $_SESSION['counter'] . ' fois cette page';
?>
