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
    <title>Exercise 4</title>
</head>

<body>
    <?php
    $fName =  "";
    $lName = "";
    $gender = "";
    $address = "";
    $magazines = "";
    $duration = "";
    $paymentOp = "";
    $err = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (trim($_POST["firstName"] == "")) {
            $err = "Bạn chưa nhập đủ thông tin";
        } else {
            $fName = $_POST["firstName"];
        }
        if (trim($_POST["lastName"]) == "") {
            $err = "Bạn chưa nhập đủ thông tin";
        } else {
            $lName = $_POST["lastName"];
        }
        if (trim($_POST["address"]) == "") {
            $err = "Bạn chưa nhập đủ thông tin";
        } else {
            $address = $_POST["address"];
        }
        if (empty($_POST["gender"])) {
            $err = "Bạn chưa nhập đủ thông tin";
        } else {
            $gender = $_POST["gender"];
        }
        if (empty($_POST["magazines"])) {
            $err = "Bạn chưa nhập đủ thông tin";
        } else {
            for ($i = 0; $i < count($_POST["magazines"]); $i++) {
                if ($i == count($_POST["magazines"]) - 1) {
                    $magazines .=$_POST["magazines"][$i] . " magazines";
                } else {
                    $magazines .= $_POST["magazines"][$i] . ",";
                }
            }
        }
        if (empty($_POST["duration"])) {
            $err = "Bạn chưa nhập đủ thông tin";
        } else {
            $duration = $_POST["duration"];
        }
        if (empty($_POST["paymentOption"])) {
            $err = "Bạn chưa nhập đủ thông tin";
        } else {
            $paymentOp = $_POST["paymentOption"];
        }
    }
    ?>
    <div class="container >
        <h3 >Subscription Form</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h4 class="text-danger"><?php echo $err; ?></h4>
            <fieldset>
                <legend>Personal Information</legend>
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" name="firstName" id="firstName">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName">
                </div>
                <div class="form-group">
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="gender" class="mr-5">Male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="gender">Female</label>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label> <br>
                    <textarea name="address" cols="30" rows="3"></textarea>
                </div>
            </fieldset>
            <fieldset>
                <legend>Magazines Subscription For</legend>
                <input type="checkbox" name="magazines[]" id="magazine" value="TIME">
                <label for="magazines" class="mr-3">TIME</label>
                <input type="checkbox" name="magazines[]" id="magazine" value="Newsweek">
                <label for="magazines" class="mr-3">Newsweek</label>
                <input type="checkbox" name="magazines[]" id="magazine" value="Sunday">
                <label for="magazines" class="mr-3">Sunday</label>
                <input type="checkbox" name="magazines[]" id="magazine" value="Vogue">
                <label for="magazines" class="mr-3">Vogue</label>
                <input type="checkbox" name="magazines[]" id="magazine" value="People">
                <label for="magazines" class="mr-3">People</label>
            </fieldset>
            <fieldset>
                <legend>Duration</legend>
                <input type="radio" name="duration" id="" value="1 year">
                <label for="duration" class="mr-4">1 Year</label>
                <input type="radio" name="duration" id="" value="3 year">
                <label for="duration" class="mr-4">3 Year</label>
                <input type="radio" name="duration" id="" value="5 year">
                <label for="duration" class="mr-4">5 Year</label>
            </fieldset>
            <fieldset>
                <legend>Payment Option</legend>
                <input type="radio" name="paymentOption" id="" value="demand Draft">
                <label for="paymentOption" class="mr-4">Demand Draft</label>
                <input type="radio" name="paymentOption" id="" value="credit Card">
                <label for="paymentOption" class="mr-4">Credit Card</label>
            </fieldset>
            <div class="form-group">
                <input type="submit" name="process" id="process" class="btn btn-primary" value="Process">
                <input type="reset" name="reset" id="reset" class="btn btn-light" value="Reset">
            </div>
        </form>
    </div>
</body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(trim($_POST["firstName"] != "")&&trim($_POST["lastName"] != "")&&trim($_POST["address"]) != ""&&!empty($_POST["gender"])&&!empty($_POST["magazines"])&&!empty($_POST["duration"])&&!empty($_POST["paymentOption"])){ ?>
        <script>
            const areYouSure=confirm('Do you want to order <?php echo "$magazines for $duration and to pay with $paymentOp" ?>')
            if (areYouSure) {
                alert('Thank you very much your order, we wil supply as soon as possible the magazines for you to the address:\n <?php echo "Mr.$fName $lName"?>\n <?php echo" $address" ?>')
            }
        </script>
<?php  }}?>

</html>