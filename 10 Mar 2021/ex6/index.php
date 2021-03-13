<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Exercise 6</title>
</head>

<body class="bg-success">
    <?php
        $string="";
        $count=0;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $string=strtolower($_POST['string']);
            for($i=0;$i<strlen($string);$i++){
                if(in_array($string[$i], ["u","e","o","a","i"])){
                    $count++;
                }
            }
        }
    ?>
    <div class="container-fluid text-center text-white">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="string">Search String</label>
            <input type="text" name="string" id="string" class="form-control w-25 mx-auto">
            <input type="submit" name="submit" id="submit" class="btn btn-primary mt-2" value="Submit">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                echo "Có $count nguyên âm trong $string";
            }
        ?>
    </div>
</body>

</html>