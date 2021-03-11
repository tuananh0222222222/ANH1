<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>ex1</title>
</head>
<body>
<?php 
    
    $taikhoan = "";
    $matkhau = "";
    $name = $_POST["name"];
    $pass = $_POST["password"];

    switch ($name) {
        case 'admin': 
            if ($pass == "admin") {
                $taikhoan = "admin";
                $matkhau ="admin";
            }
            echo "Tài khoản : $taikhoan" ;
            echo "<br>";
            echo "Mật khẩu : $matkhau";
            break;
        default:
        echo "<h4>Thông tin sai hoặc mật khẩu không chính xác </h4>";            
   }   
?>

	<div class="sign_in">
		<form action="#" method="post"  >          
            <h1 >Sign in</h1>
			<input type="text" name="name" placeholder="Username"" required><br>
			<input type="password" name="password"  placeholder="Password"  required><br>
			<input type="submit" name="submit" value="Login">            
		</form>	
	</div> 
</body>
</html>

