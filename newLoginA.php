<?php
session_start();
if(isset($_SESSION["user"])) {
    header("Location: adminHomeP.php");
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
            $sql = "SELECT * FROM admind WHERE email = '$email' AND password='$password'";
            $result = mysqli_query($con,$sql);
            
            if (mysqli_num_rows($result)==1) {
                
                session_start();
                $_SESSION["user"] = "yes";
                header("Location: adminHomeP.php");
                die();
                }  
            
            else {
                echo "<div class='alert'>Email/Password doesn't match!</div>";
            }
        }
                  
         
         ?>
    
        <div class="header">
            <p class="image-text">Admin's Login</p>
        </div>
        <form action="newLoginA.php" method="post">
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
        
    </div>
</body>
</html>