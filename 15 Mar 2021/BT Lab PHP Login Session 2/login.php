<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login2</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>  
    <div class="login-form">
        <h5>Login</h5>
        <form action="#" method="post">
            <label for="username">Username:</label>
            <input type="text" name="user" id="username">
            <span id="username-err" ></span>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="Password" id="password"><br>
            <input  type="submit" onlick="save()" value="Submit">
            <input  type="reset" value="Reset">
        </form>    
    </div>
    <script src="./js/validate.js"></script>
    <script src='https://cdn.jsdelivr.net/g/lodash@4(lodash.min.js+lodash.fp.min.js)'></script>
</body>
</html>