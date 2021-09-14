<?php


require 'users.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST')
    header('Location: signin.php');

        if (isset($_POST['login']) && isset($_POST['password'])) {
            $login = htmlentities($_POST['login']);
            $password = htmlentities($_POST['password']);

            foreach ($users as $key => $value) {
                if($key===$login && $value===$password) {
                    $_SESSION['username'] = $login;
                    header('Location: welcome.php');
                    exit();
                }else{
                    $_SESSION['message'] = 'Nom d\'utilisateur ou mot de passe incorrect(s)';
                    header('Location: signin.php');

                }
             }
        }



    exit;

