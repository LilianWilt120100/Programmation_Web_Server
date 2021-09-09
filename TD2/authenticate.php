<?php

include 'users.php';

$meth = $_SERVER['REQUEST_METHOD'];
if($meth=='POST') {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = htmlentities($_POST['login']);
        $password = htmlentities($_POST['password']);
    }
}else{
    header('Location: signin.php');
    exit();
}

exit;
