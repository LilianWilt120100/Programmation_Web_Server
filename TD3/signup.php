<?php
session_start();


echo "<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<title>Signup</title>
</head>

<body>
	<h1>Signup</h1>
	<br />
	<form action='adduser.php' method='post'>
		<input name='login' type='text' placeholder='Login' />
		<input name='password' type='password' placeholder='Password' />
	    <input name='confirmedpassword' type='password' placeholder='Confirmed Password' />

		<br />
		<br />
		<input type='submit' value='Add me' />	
		<br />
		<a href='signin.php'>Already register ? Connect you here !</a>

		
	</form>
</body>

</html>"







?>
