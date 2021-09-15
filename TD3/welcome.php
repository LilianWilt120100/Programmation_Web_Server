<?php
	session_start();

	// Si la requête arrive avec un autre type que GET
	// ou que le client n'est pas considéré comme connecté,
    // renvoi vers le formulaire de connexion

	// sinon, on affiche la page de bienvenue


if ($_SERVER['REQUEST_METHOD'] !== 'GET' || !isset($_SESSION['username']))
    header('Location: signin.php');


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My account</title>
    </head>
    <body>
        <p>
			Hello <?php echo $_SESSION['username'] ?> !<br>
			Welcome on your account.
		</p>
        <a href='signout.php'>Déconnexion</a>
        <a href='formpassword.php'>Click here to change your password</a>
        <a href='deleteuser.php'>Click here to delete your profile</a>


    </body>
</html>
