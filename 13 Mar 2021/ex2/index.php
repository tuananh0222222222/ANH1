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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Exercise 2</title>
</head>
<?php
$userErr = $emailErr = $passErr = $cfPassErr = $fileErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (trim($_POST["username"]) == "") {
        $userErr = "User name is required";
    } else {
        $userName = $_POST["username"];
    }
    if (trim($_POST["email"]) == "") {
        $emailErr = "Email address is required";
    } else {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"];
        } else {
            $emailErr = "Email address is not valid";
        }
    }
    if (trim($_POST["password"]) == "") {
        $passErr = "Password is required";
    }
    if (trim($_POST["confirmPass"]) == "") {
        $cfPassErr = "Confirm Password is required";
    } else {
        if ($_POST["confirmPass"] != $_POST["password"]) {
            $cfPassErr = "Your passwords don’t match";
        }
    }
    $state_uploaded = 0;
    if ($_FILES["avatar"]["tmp_name"]!="") {
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $allowType = ["jpg", "png", "jpeg", "gif"];
        if (isset($_POST["submit"])) {
            $checkImage = getimagesize($_FILES["avatar"]["tmp_name"]);
            if ($checkImage) {
                $state_uploaded = 1;
            } else {
                $fileErr = "Not file image";
                $state_uploaded = 0;
            }
        }
        if (file_exists($target_file)) {
            $fileErr = "file already exists";
            $state_uploaded = 0;
        }
        if (!in_array($imageFileType, $allowType)) {
            $fileErr = "file type must be jpg, png, jpeg or gif";
            $state_uploaded = 0;
        }
    }else{
        $fileErr="You haven't uploaded the photo yet";
    }
}
?>

<body class="bg-dark text-white">
    <div class="container w-50">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="mt-5">
            <h1 class="mt-5">Create an account</h1>
            <input type="text" name="username" id="username" class="form-control mt-3" placeholder="User Name">
            <span class="text-danger"><?php echo $userErr; ?></span>
            <input type="text" name="email" id="email" class="form-control mt-3" placeholder="Email Address">
            <span class="text-danger"><?php echo $emailErr; ?></span>
            <input type="password" name="password" id="password" class="form-control mt-3" placeholder="Password">
            <span class="text-danger"><?php echo $passErr; ?></span>
            <input type="password" name="confirmPass" id="confirmPass" class="form-control mt-3" placeholder="Confirm Password">
            <span class="text-danger"><?php echo $cfPassErr; ?></span> <br>
            <label for="avatar">Select your avatar: </label><input type="file" name="avatar" id="avatar" class="mt-3">
            <br><span class="text-danger"><?php echo $fileErr; ?></span>
            <input type="submit" name="submit" id="submit" class="form-control mt-3 btn btn-primary" value="Register">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($state_uploaded) {
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    echo "Username: $userName <br>";
                    echo "Email: $email <br>";
                    echo "Avatar: <br>";
                    echo "<img src='$target_file' alt='err'><br>";
                    echo "File Name: " . $_FILES["avatar"]["name"] . "<br>";
                    echo "File Format: $imageFileType";
                }
            }
        }
        ?>
    </div>
</body>

</html>