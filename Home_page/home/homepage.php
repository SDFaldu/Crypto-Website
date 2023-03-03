<?php 
include "functions.php";
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cryptocurrency Website Design</title>
        <link rel="stylesheet" href="homepage.css">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav>
    
    <img src="image/logo.svg" alt="Logo" class="profile">
       
    <img src="image/profile_logo.png" alt="profile" class="profile" onclick="toggleMenu()">
    <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
            <div class="user-info">
                <img src="image/profile_logo.png" class="profile">
                <h2><?php echo $_SESSION["username"];?></h2>
            </div>
            <hr>

            <a href="homepage.php" class="sub-menu-link">
                <img src="image/homepage.png" alt="">
                <p>Homepage</p>
                <span>></span>
            </a>

            <a href="profile.php" class="sub-menu-link">
                <img src="image/profile_logo.png" alt="">
                <p>My Profile</p>
                <span>></span>
            </a>
            <a href="edit_profile.php" class="sub-menu-link">
                <img src="image/edit-profile.png" alt="">
                <p>Edit Profile</p>
                <span>></span>
            </a>
            <a href="logout.php" class="sub-menu-link">
                <img src="image/logout.png" alt="">
                <p>Logout</p>
                <span>></span>
            </a>
        </div>
    </div>
    </nav>

    <script>
            let subMenu = document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
    </script>
    </body>
</html> 