<?php
session_start();
if(isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="newStyle.css">
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <p></p>
    <br />
    <div class="container">
        <?php
        if(isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
            if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
                array_push($errors,"All fields are required!!");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "email is not valid!!");
            }
            if (strlen($password)<8) {
                array_push($errors,"Password should be atleast 8 characters long!!");
            }
            if ($password !==$passwordRepeat) {
                array_push($errors,"Password doesn't match!!");
            }
            require_once "connec.php";
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($con,$sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
                array_push($errors,"Email already exists!");
            }
            if (count($errors)>0) {
                foreach ($errors as $errors) {
                    echo "<div class='alert'>$errors</div>";
                }
            }
            else {
                
                $sql = "INSERT INTO users(full_name,email,password) VALUES(?,?,?)";
                $stmt = mysqli_stmt_init($con);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql); #returns T/F,if T we will add valuess into sqlComman
                if ($prepareStmt ) {
                   mysqli_stmt_bind_param($stmt,"sss",$fullName,$email,$passwordHash);
                   mysqli_stmt_execute($stmt);
                   echo "<div class='alert_success'>Registered Sucessfully. </div>";
                }
                else {
                    die("something went wrong");
                }
            }
        }        
        
        ?>

        <div class="header">
            <p class="image-text">Sign up</p>
        </div>
        <form action="newRegistration.php" method="post">
            <div class="form">
                <input type="text" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form">
                <input type="email" name="email" placeholder="Email:">
            </div>
            <div class="form">
                <input type="password" name="password" placeholder="Password:">
            </div>
            <div class="form">
                <input type="password" name="repeat_password" placeholder="Confirm Password:">
            </div>
            <div class="btn">
                <input type="submit" class="btn-register" value="Register" name="submit">
            </div>
        </form>
        <div><p>Already registered ?<a href="newLogin.php">Login here</a></p></div>

    </div>
</body>
</html>