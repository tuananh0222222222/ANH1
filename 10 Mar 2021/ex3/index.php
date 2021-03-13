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
    <title>Ex3</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    $name = "";
    $email = "";
    $phoneNum ="";
    $website = "";
    $message = "";
    $err = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!filter_var($_POST["website"], FILTER_VALIDATE_URL)) {
            $err = "Trường website cần phải có định dạng URL";
        } else {
            $website = $_POST["website"];
        }
        if (!is_numeric($_POST["phoneNum"])) {
            $err = "Số điện thoại chỉ được phép nhập số";
        } else {
            $phoneNum = $_POST["phoneNum"];
        }
        if (empty($_POST["name"])) {
            $err = "Không được để trống";
        } else {
            $name = $_POST["name"];
        }
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $err = "Không được để trống";
        } else {
            $email = $_POST["email"];
        }
        $message = $_POST["message"];
    }
    ?>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="w-50 mx-auto">
            <span class="text-danger"><?php echo $err; ?></span>
            <input type="text" name="name" id="name" placeholder="Your Name" class="mt-5 form-control" value="<?php echo $name; ?>" />
            <input type="email" name="email" id="email" placeholder="Your Email Address" class="mt-2 form-control" value="<?php echo $email; ?>" />
            <input type="text" name="phoneNum" id="phoneNum" placeholder="Your PhoneNumber" class="mt-2 form-control" value="<?php echo $phoneNum; ?>" />
            <input type="text" name="website" id="website" placeholder="Your Website starts with https://" class="mt-2 form-control" value="<?php echo $website; ?>" />
            <textarea name="message" id="message" rows="5" placeholder="Type Your Message Here..." class="mt-2 form-control"></textarea>
            <input type="submit" name="submit" id="submit" class="mt-2 bg-danger text-white form-control font-weight-bolder" value="SUBMIT">
        </form>
    </div>
    <div class="w-50 mx-auto mt-3">
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if (filter_var($_POST["website"], FILTER_VALIDATE_URL) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && is_numeric($_POST["phoneNum"]) && !empty($_POST["name"])) {
                echo "Your Name: $name <br>";
                echo "Your Email: $email <br>";
                echo "Your Phone Number: $phoneNum <br>";
                echo "Your Website: $website <br>";
                echo "Your Message: $message <br>";
            }
        }
        ?>
    </div>

</body>

</html>