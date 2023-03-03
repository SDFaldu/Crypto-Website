<?php
require("functions.php");
session_start();
$user_id = $_SESSION['user_id'];
if (isset($_POST['username'])) {
	
	$name = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['contact'];
	$password = $_POST['password'];
	
	$sql = "update project set username='$name', email='$email', contact='$phone', password='$password' where user_id='$user_id'";
	
	if (mysqli_query($conn, $sql)) {
		echo "Profile updated successfully.";
    header("Location: http://localhost/Home_page/Login/login.php");
	} else {
		echo "Error updating profile: ";
	}
	
  exit();
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit_profile.css">
    <title>Profile</title>
</head>
<body>
<div class="container">
<div class="title">Update your profile</div>
<div class="content">
<form action="#" method="post">
        <div class="user-details">
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
        </div>
        <div class="button">
          <input type="submit" value="Update">
        </div>      
</form>
</div>
</div>
</body>
</html>
<?php
require("functions.php");
session_start();
$user_id = $_SESSION['user_id'];
if (isset($_POST['username'])) {
	
	$name = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['contact'];
	$password = $_POST['password'];
	
	$sql = "update project set username='$name', email='$email', contact='$phone', password='$password' where user_id='$user_id'";
	
	if (mysqli_query($conn, $sql)) {
		echo "Profile updated successfully.";
    header("Location: http://localhost/Home_page/Login/login.php");
	} else {
		echo "Error updating profile: ";
	}
	
  exit();
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit_profile.css">
    <title>Profile</title>
</head>
<body>
<div class="container">
<div class="title">Update your profile</div>
<div class="content">
<form action="#" method="post">
        <div class="user-details">
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
        </div>
        <div class="button">
          <input type="submit" value="Update">
        </div>      
</form>
</div>
</div>
</body>
</html>
