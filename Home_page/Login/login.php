<?php
include "functions.php";
if(isset($_POST['username']) && isset($_POST['password']))
{
$username = $_POST['username'];
$password = $_POST['password'];
    $sql = "SELECT * FROM project WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)){
        header("Location: http://localhost/Home_page/home/homepage.php");
    }
    else
    {
        echo '<script>alert("incorrect id/password")</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section>
        <div class="imgBx">
            <img src="image/login1.png">
            <div class="text1">
                <h1>WELCOME TO  <br>CRYPTO CIRCLE</h1>
                <div class="text2"><h3>Invest for free <br> and earn money</h3></div>
                <div class="text3"><h6>10 Million + People Have Joined<br>Our Network</h6></div>
            </div>
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Login</h2>
                <form action="#" method="post">
                    <div class="inputBX">
                        <span>Username</span>
                        <input type="text" name="username">
                    </div>
                    <div class="inputBX">
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>
                    
                    <div class="inputBX">
                        <input type="submit" value="Sign in"name="signin">
                    </div>
                    <div class="inputBX">
                        <p>Don't have an account? <a href="../register/register.php">Sign up</a></p>
                    </div>
                </form>
                <h3>Login with social media</h3>
                <ul class="sci">
                    <li><img src="image/facebook-app-symbol.png"></li>
                    <li><img src="image/instagram.png"></li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>