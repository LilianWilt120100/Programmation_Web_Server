<?php

require 'bdd.php';

session_start();
$_SESSION['message'] = '';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' && !isset($_SESSION['username']))
    header('Location: formpassword.php');

$db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);

if (isset($_POST['Newpassword']) && isset($_POST['Newpassword2'])) {
    if ($_POST['Newpassword'] === $_POST['Newpassword2']) {
        $password = password_hash(htmlentities($_POST['Newpassword']), PASSWORD_DEFAULT);
    } else {
        $_SESSION['message'] = 'Mots de passe différents';
        header('Location: formpassword.php');
    }

    try {
        $stmt = $db->prepare('update users set password=? where login=?;');
        $stmt->execute([$password, $_SESSION['username']]);
        $_SESSION['message'] = '';
        header('Location: welcome.php');
    } catch (Exception $e) {
        $_SESSION['message'] = 'Un problème est survenu lors du changement de mot de passe';
        header('Location: formpassword.php');
    }
}

exit;
