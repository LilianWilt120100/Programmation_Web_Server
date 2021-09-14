<?php

session_start();

require 'bdd.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST')
    header('Location: signup.php');

$db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);

if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['confirmedpassword'])) {
    $login = htmlentities($_POST['login']);
    $password = htmlentities($_POST['password']);
    $confirmedpassword = htmlentities($_POST['confirmedpassword']);

    if($password === $confirmedpassword){
        $stmt = $db->prepare('INSERT INTO users(login, password) VALUES (?,?)');
        $stmt -> execute([$login, password_hash($password, PASSWORD_DEFAULT)]);
        header('Location: signin.php');
    }else{
        header('Location: signup.php');

    }
}

?>