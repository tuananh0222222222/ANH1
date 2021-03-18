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
    <title>Exercise 2</title>
</head>

<body class="bg-dark text-white">
    <?php
    function isPalindrome($word){
        $new="";
        for($i=strlen($word)-1;$i>=0;$i--){
            $new.=$word[$i];
        }
        if($new==$word){
            return "$word is Palindrome";
        }else{
            return "$word is not Palindrome";
        }
    }
    ?>
    <div class="container-fluid text-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-50 mx-auto my-5">
            <input type="text" name="word" id="word" placeholder="Type Your Word Here" class="form-control mb-3">
            <input type="submit" name="count" id="count" value="Count Words" class="btn btn-primary">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo isPalindrome($_POST["word"]);
            }
        ?>
    </div>
</body>

</html>