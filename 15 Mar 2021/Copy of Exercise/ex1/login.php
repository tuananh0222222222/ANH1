<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<meta charset="utf-8">
</head>
<body>
	<form method="post">
		<h1>Login</h1>
		<label>Username</label>
		<input type="text" name="name" value="<?php if(isset($_POST['login'])){echo $_POST['name'];} ?>"><br>
		<label>Password</label>
		<input type="password" name="Password" value="<?php if(isset($_POST['login'])){echo $_POST['password'];} ?>"><br>
		<input type="submit" name="login" value="Login">
	</form>	


</body>


</html>