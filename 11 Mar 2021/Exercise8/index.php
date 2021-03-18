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
    <title>Exercise 8</title>
</head>

<body class="bg-dark text-white">
    <?php
    function checkAnagram($str1, $str2)
    {
        if (strlen($str1) != strlen($str2)) {
            return false;
        } else {
            for ($i = 0; $i < strlen($str1); $i++) {
                if (strpos($str2, $str1[$i])) {
                    continue;
                } else {
                    return false;
                }
            }
            return true;
        }
    }
    ?>
    <div class="container-fluid text-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-50 mx-auto mt-5">
            <input type="text" name="string1" id="string1" placeholder="Type Your First String Here" class="form-control mb-3">
            <input type="text" name="string2" id="string2" placeholder="Type Your Second String Here" class="form-control mb-3">
            <input type="submit" name="count" id="count" value="Count Words" class="btn btn-primary">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(checkAnagram($_POST["string1"], $_POST["string2"])){
                echo "True";
            }else{
                echo "False";
            };
        }
        ?>
    </div>
</body>

</html>