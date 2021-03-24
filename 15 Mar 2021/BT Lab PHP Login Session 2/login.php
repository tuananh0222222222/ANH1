<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/signin.css">   
</head>
<body>
<script>
    function validate() {
        var name = document.myform.name.value;
        var password = document.myform.password.value;
        var status = false;
 
        if (name.length < 1) {
            document.getElementById("errUsername").innerHTML = 
                "Bạn chưa nhập tài khoản";
            status = false;
        } else {
            document.getElementById("errUsername").innerHTML = 
                " ";
            status = true;
        }
        if (password == "") {
            document.getElementById("errPassword").innerHTML = 
                "Bạn chưa nhập mật khẩu";
            status = false;
        } else {
            document.getElementById("errPassword").innerHTML = 
                "";
        }
        return status;
    }
</script>

<form  name="myform" method="post" action="wellcome.php" onsubmit="return validate()">
    <h1>login</h1>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="name" ><br>    
        <span id="errUsername"></span>    
    </div>
   <div class="form-group">
        <label for="username">Password</label>
        <input type="password" name="password" > <br>
        <span id="errPassword"></span>                                                                    
   </div>                                                     
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form> 


<?php
    
?> 

</body>
</html>