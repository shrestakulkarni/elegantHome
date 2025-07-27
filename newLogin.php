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
    <title>Login Form</title>
    <link rel="stylesheet" href="newStyle.css">
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="container">
         <?php
         if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "connec.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($con,$sql);
            $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }
                else{
                    echo "<div class='alert'>Password doesn't match!</div>";
                }
                
            }
            else {
                echo "<div class='alert'>Email doesn't match!</div>";
            }

         }         
         
         ?>
    
        <div class="header">
            <p class="image-text">Login</p>
        </div>
        <form action="newLogin.php" method="post">
              <div class="form">
                <input type="email" placeholder="Enter Email:" name="email">
              </div>
              <div class="form">
                <input type="password" placeholder="Enter Password:" name="password">
              </div>
              <div class="btn">
                <input type="submit" class="btn-register" value="Login" name="login">
              </div>
        </form>
        <div><p>Not registered yet?<a href="newRegistration.php">Register here</a></p></div>
    </div>
</body>
</html>