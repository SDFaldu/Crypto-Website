<?php 
session_start();
include "functions.php";
if(!isset($_SESSION["login_sess"]))
{
    header("Location: http://localhost/Home_page/Login/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<div class="profile">
  <div class="profile-image">
    <img src="image/profile_logo.png" alt="Profile Image">
  </div>
  <div class="profile-menu">
    <h3><?php echo $_SESSION["username"]; ?></h3>
    <ul>
      <li><strong>Email:</strong> <?php echo $_SESSION['email']; ?></li>
      <li><strong>Phone:</strong> <?php echo $_SESSION['contact']; ?></li>
    </ul>
    <button><a href="edit_profile.php">Edit profile</a></button>
  </div>
</div>

</body>
</html>