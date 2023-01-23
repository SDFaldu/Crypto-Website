<?php
require "functions.php";
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['cpassword']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$contact = $_POST['contact'];
$email = $_POST['email'];

if ($password != $cpassword) 
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
  InsertData($username, $password, $contact, $email);
  header("Location: http://localhost/Home_page/Login/login.php");
  }
}
?>
<div class="input-box">
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
          </div>
          <div class="input-box"></div>