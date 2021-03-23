<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<a href="#">Log out</a>


	<?php
		if (isset($_POST['login'])) {
			setcookie('name' ,$_POST['name'] ,time()+300 );
			setcookie('password' ,$_POST['password'] ,time()+300 );
			header("Location:login-success.php");
		}
	?>
</body>
</html>