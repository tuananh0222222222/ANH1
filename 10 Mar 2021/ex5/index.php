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
    <title>Exercise 5</title>
</head>

<body>
    <?php
        $a=$b=$result=$err="";
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            if(is_numeric($_POST["numberA"])&&is_numeric($_POST["numberB"])){
                $a=$_POST["numberA"];
                $b=$_POST["numberB"];
                if(isset($_POST["plus"])){
                    $result=$a+$b;
                }
                if(isset($_POST["minus"])){
                    $result=$a-$b;
                }
                if(isset($_POST["multiply"])){
                    $result=$a*$b;
                }
                if(isset($_POST["divide"])){
                    $result=$a/$b;
                }
            }else{
                $err="Số a và b phải cùng là số";
            }
        }
    ?>
    <div class="container-fluid w-25 mx-auto">
        <div class="my-3 text-center font-weight-bold">Thực hành toán tử</div>
        <span class="text-danger"><?php echo $err;?></span>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="numberA">Nhập số a</label>
            <input type="text" name="numberA" id="numberA" class="form-control">
            <label for="numberB">Nhập số b</label>
            <input type="text" name="numberB" id="numberB" class="form-control">
            <input type="submit" name="plus" id="plus" value="a + b" class="btn btn-success mt-3">
            <input type="submit" name="minus" id="minus" value="a - b" class="btn btn-primary mt-3">
            <input type="submit" name="multiply" id="multiply" value="a * b" class="btn btn-danger mt-3">
            <input type="submit" name="divide" id="divide" value="a / b" class="btn btn-warning mt-3">
        </form>
        <span class="text-primary">Kết quả là: <?php echo $result;?></span>
    </div>
</body>

</html>