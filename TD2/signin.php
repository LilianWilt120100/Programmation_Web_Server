<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Signin</title>
	</head>
	<body>
		<h1>Signin</h1>
        <?php

        $meth = $_SERVER['REQUEST_METHOD'];
        if($meth=='GET') {
            echo '<form action = "authenticate.php" >
                    <p > Votre identifiant : <input type = "text" name = "identifiant" ></p >
                    <p > Votre mot de passe : <input type = "password" name = "mdp" ></p >
			        <input type = "submit" value = "Connect " >
		          </form >'
            ;
		}
		?>
	</body>
</html>
