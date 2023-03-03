<?php
require "functions.php";
session_start();
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['cpassword']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$contact = $_POST['contact'];
$email = $_POST['email'];


$sql="select * from project where username='$username'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)>0){
  $row = mysqli_fetch_assoc($res);
  if($username==$row['username'])
  {
  header("Location: register.php?error=username already exists.....");
  }
}
else if ($password != $cpassword) 
  {
    header("Location: register.php?error=Both password doesn't match");
  }
else if (strlen($password)<8) 
  {
    header("Location: register.php?error=Password length is lessthan 8");
  }
else if (strlen($contact)!=10) 
  {
    header("Location: register.php?error=Contact length is lessthan 10");
  }
  else{
  $result = mysqli_query($conn,"insert into project(username,password,contact,email) values('$username','$password','$contact','$email')");
  header("Location: http://localhost/Home_page/Login/login.php");
  }
}
session_abort();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Register page</title>
    <link rel="stylesheet" href="register.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="post">
        <div class="user-details">
        <div class="input-box">
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
          </div>
          <div class="input-box"></div>
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="contact" maxlength="10" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="cpassword" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
        <div class="inputBX">
            <p>already have an account! <a href="../Login/login.php">Sign in</a></p>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
