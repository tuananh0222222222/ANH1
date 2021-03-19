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
    <title>Exercise 3</title>
</head>
<?php
$textErr = $checkboxErr = $textareaErr = $radioErr = $fileErr =$checkbox= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (trim($_POST["text"]) == '') {
        $textErr = "*Text is required";
    } else {
        $text = $_POST["text"];
    }
    if (empty($_POST["checkbox"])) {
        $checkboxErr = "*At least one checkbox is checked";
    } else {
        foreach ($_POST["checkbox"] as $val) {
            $checkbox .= "$val,";
        }
    }
    if (trim($_POST["textarea"])== "") {
        $textareaErr = "*Textarea is required";
    } else {
        $textarea = $_POST["textarea"];
    }
    if (empty($_POST["radioBtn"])) {
        $radioErr = "*Radio must be checked";
    } else {
        $radio = $_POST["radioBtn"];
    }
    $select = $_POST["option"];
    $state_uploaded = 0;
    if ($_FILES["fileUpload"]["tmp_name"] != "") {
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $allowType = ["jpg", "png", "jpeg", "gif"];
        if (isset($_POST["submit"])) {
            $checkImage = getimagesize($_FILES["fileUpload"]["tmp_name"]);
            if ($checkImage) {
                $state_uploaded = 1;
            } else {
                $fileErr = "*Not file image";
                $state_uploaded = 0;
            }
        }
        if (file_exists($target_file)) {
            $fileErr = "*file already exists";
            $state_uploaded = 0;
        }
        if (!in_array($imageFileType, $allowType)) {
            $fileErr = "*file type must be jpg, png, jpeg or gif";
            $state_uploaded = 0;
        }
    } else {
        $fileErr = "*You haven't uploaded the photo yet";
    }
}
?>

<body class="bg-dark text-white">
    <div class="container w-50">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mt-3" enctype="multipart/form-data">
            <div class="form-group">
                <label for="text">Text</label><span class="text-danger"><?php echo $textErr; ?></span>
                <input type="text" name="text" id="text" class="form-control" placeholder="Placeholder">
            </div>
            <div class="form-group">
                <label for="checkbox">Checkbox</label><span class="text-danger"><?php echo $checkboxErr; ?></span><br>
                <input type="checkbox" name="checkbox[]" id="checkbox1" value="Checkbox 1"> <label for="checkbox">Checkbox 1</label><br>
                <input type="checkbox" name="checkbox[]" id="checkbox2" value="Checkbox 2"> <label for="checkbox">Checkbox 2</label><br>
                <input type="checkbox" name="checkbox[]" id="checkbox3" value="Checkbox 3"> <label for="checkbox">Checkbox 3</label><br>
            </div>
            <div class="form-group">
                <label for="textarea">Textarea</label><span class="text-danger"><?php echo $textareaErr; ?></span>
                <textarea name="textarea" id="textarea" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="radioBtn">Radio button</label><span class="text-danger"><?php echo $radioErr; ?></span><br>
                <input type="radio" name="radioBtn" id="yep" class="ml-3" value="yep"> yep
                <input type="radio" name="radioBtn" id="nope" class="ml-3" value="nope"> nope
                <input type="radio" name="radioBtn" id="none" class="ml-3" value="none"> none
            </div>
            <div class="form-group">
                <label for="option">Option</label><span class="text-danger">
                <select name="option" id="option" class="form-control">
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="file">Upload File</label><span class="text-danger"><?php echo $fileErr; ?></span><br>
                <input type="file" name="fileUpload" id="file">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary form-control">
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($state_uploaded) {
                if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                    echo "Text: $text <br>";
                    echo "Checkbox: $checkbox <br>";
                    echo "Textarea: $textarea <br>";
                    echo "Radio: $radio <br>";
                    echo "Select: $select <br>";
                    echo "Uploads file: <br>";
                    echo "<img src='$target_file' alt='err'><br>";
                }
            }
        }
        ?>
    </div>
</body>

</html>