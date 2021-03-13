<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<?php
    $firstName = $lastName = $email = $gender = $state = $hobbies = "";
    $fNameErr = $lNameErr = $emailErr = $genderErr = "";
    function check_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST["fname"])) {
            $fNameErr = "*First Name is required";
        } else {
            $firstName = check_input($_POST["fname"]);
        }
        if (empty($_POST["lname"])) {
            $lNameErr = "*Last Name is required";
        } else {
            $lastName = check_input($_POST["lname"]);
        }
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"];
        } else {
            $email = $_POST["email"];
            $emailErr = "*Email is not valid";
        }
        if (empty($_POST["gender"])) {
            $genderErr = "*Gender is required";
        } else {
            $gender = check_input($_POST["gender"]);
        }
        $state=$_POST["state"];
        if (empty($_POST["hobbies"])) {
            $hobbies = "";
        } else {
            foreach ($_POST["hobbies"] as $hobby) {
                $hobbies .= "$hobby,";
            }
        }
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post" >
                    <h5>Redgistration Form</h5>
                    <div class="form-group">
                        <label for="Fistname">Fist name</label>
                        <input type="text" name ="fname" class="form-control" name="fname" id="fname"  value="<?php echo $firstName; ?>"> 
                        <span class="text-danger"><?php echo $fNameErr; ?></span>
                    </div>
                   <div class="form-group">
                        <label for="Lastname">Last name</label>
                         <input type="text" name="lname" class="form-control" name="lname" id="lname" value="<?php echo $lastName; ?>">
                         <span class="text-danger"><?php echo $lNameErr; ?></span>
                   </div>
                    <div class="form-group">
                        <label for="Lastname">Email</label>
                        <input type="email" name="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>">
                        <span class="text-danger"><?php echo $emailErr; ?></span>
                    </div>
                    <div class="form-group">
                    <label for="gender" class="control-label mr-2">Gender</label>
                    <input type="radio" name="gender" id="male" value="male" <?php if (isset($gender) && $gender == "male") echo "checked"; ?>> Male
                    <input type="radio" name="gender" id="female" value="female" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>> Female <span class="text-danger"><?php echo $genderErr; ?></span>
                </div>
                   <div class="form-group">
                        <label for="State"><b>State</b></label>
                        <select name="state" class="custom-select">
                            <option selected>Johor</option>             
                            <option value="2">Massachusetts</option>
                            <option value="3">Washington</option>
                        </select>
                   </div>
                   <div class="form-group">
                    <label for="hobbies" class="control-label">Hobbies</label> <br>
                    <input type="checkbox" name="hobbies[]" id="badminton" value="badminton">
                    <label for="badminton" class="control-label">Badminton</label>
                    <input type="checkbox" name="hobbies[]" id="football" value="football">
                    <label for="football" class="control-label">Football</label>
                    <input type="checkbox" name="hobbies[]" id="bicycle" value="bicycle">
                    <label for="bicycle" class="control-label">Bicycle</label>
                </div>
                    <button class="btn btn-primary" type="submit" name="submit" value="Save Record" id="submit">Save record</button>
                    <button class="btn btn-light" type="reset" value="Reset"id="reset">reset</button>
                </form> 
                <div class="container-fluid">
            <?php
            if (!empty($_POST["fname"]) && !empty($_POST["lname"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && !empty($_POST["gender"]))) {
                echo "Đăng kí thành công! <br><br>";
                echo "Thông tin của bạn: <br>";
                echo "First Name: $firstName <br>";
                echo "Last Name: $lastName <br>";
                echo "Email: $email <br>";
                echo "Gender: $gender <br>";
                echo "Hobbies: $hobbies <br>";
            }
            ?>  
            </div>         
            </div>
            <div class="col-md-6">
                <div class="rowtwo">
                    <h5 class="content">Featured</h5>
                    <h5>Special title tratment</h5>
                    <p>With supporting text below as a natrul lead-in additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>                   
                </div>
            </div>
              
        </div>
    </div>
</body>
</html>