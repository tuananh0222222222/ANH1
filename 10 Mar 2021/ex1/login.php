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
    $notice ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["name"] == "admin" && $_POST["password"] == "admin") {
            $taikhoan = $_POST["name"];
            $matkhau = $_POST["password"];

           
        }else {
           $notice="Thông tin tài khoản mật khẩu không chính xác";
          
        }
    }
   
?>

	<div class="signin">
		<form action="#" method="post"  >          
            <h1 >Sign in</h1>
			<input type="text" name="name" placeholder="Username"" required><br>
			<input type="password" name="password"  placeholder="Password"  required><br>
			<input type="submit" name="submit" value="Login">            
		</form>	
       <h4 ><?php echo $notice; ?></h4>
       <p><?php echo $taikhoan; ?></p>
       <p><?php echo $matkhau; ?></p>
      </div>
</body>
</html>

