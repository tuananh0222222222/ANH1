<?php

    if (session_id() === '')
    session_start();

    if( isset( $_SESSION['counter'] ) )
    {
       
        $_SESSION['counter'] += 1;
    }
    else
    {
       
        $_SESSION['counter'] = 1;
    }

    $msg = "<p>Bạn là vào truy cập ".  $_SESSION['counter'] . ' lần vào trang</p>';
    echo $msg;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/welcome.css">
</head>
<body>
<div class="container">
        <div class="sign-out">
            <a href="login.php">Sign out</a>
        </div>

        <p>Welcome :<?php echo $_POST["name"]; ?><br></p>
    </div>
</body>
</html>


<h1>
