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
    <title>Exercise 1</title>
</head>

<body class="bg-dark text-white">
    <?php
    $err = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES["fileUpLoad"])) {
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["fileUpLoad"]["name"]);
            $state_uploaded = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            $maxFileSize = 2097152;
            $allowType = ["jpg", "png", "jpeg", "gif"];
            if (isset($_POST["submit"])) {
                $checkImage = getimagesize($_FILES["fileUpLoad"]["tmp_name"]);
                if ($checkImage) {
                    $state_uploaded = 1;
                } else {
                    $err = "Not file image";
                    $state_uploaded = 0;
                }
            }
            if (file_exists($target_file)) {
                $err = "file already exists";
                $state_uploaded = 0;
            }
            if ($_FILES["fileUpLoad"]["size"] > $maxFileSize) {
                $err = "file size exceeds limit (1MB)";
                $state_uploaded = 0;
            }
            if (!in_array($imageFileType, $allowType)) {
                $err = "file type must be jpg, png, jpeg or gif";
                $state_uploaded = 0;
            }
        }
    }

    ?>

    <div class="container">
        <p class="mt-2">Select a file to upload</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="w-50">
            <span class="text-danger"><?php echo $err; ?> <br>
            </span><input type="file" name="fileUpLoad" id="file" class="my-2">
            <p>Only jpg,png,jpeg and gif file with maximum size of 1MB is allowed</p>
            <input type="submit" value="Upload" class="btn btn-primary">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($state_uploaded) {
                if (move_uploaded_file($_FILES["fileUpLoad"]["tmp_name"], $target_file)) {
                    echo "Uploaded Image: <br>";
                    echo "<img src='$target_file' alt='err' class='w-25 h-25'><br>";
                    echo "Image Name: " . $_FILES["fileUpLoad"]["name"] . "<br>";
                    echo "Image File Type: " . $imageFileType;
                }
            }
        }
        ?>
    </div>
</body>

</html>