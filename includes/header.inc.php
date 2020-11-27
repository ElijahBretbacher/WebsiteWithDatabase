<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1"/>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
</head>
<body onload="listenForFileUpload()">
<header>
    <nav>
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="blog.php">Blog</a>
            <a href="myorders.php">My Orders</a>
            <div class="dropdown">
                <button class="dropbtn">Profile
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <?php
                    if (isset($_SESSION["user_id"])) {
                        echo '<a href="settings.php">Settings</a>';
                        echo '<a href="includes/logout.inc.php">Log Out</a>';
                    } else {
                        echo '<a href="signup.php">Sign Up</a>';
                        echo '<a href="login.php">Log In</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>
</header>