<?php
include "includes/class-autoloader.inc.php";
include "includes/header.inc.php";
?>

<form action="includes/signup.inc.php" method="post">
    <div class="signup">
        <label>
            <?php
            if (!isset($_SESSION["user_id"])){
                if (isset($_GET["email"])){
                    $email=$_GET["email"];
                    echo '<input type="email" name="email" placeholder="Email" value=' . $email . '><br>';
                }else{
                    echo '<input type="email" name="email" placeholder="Email"><br>';
                }
                if (isset($_GET["nick"])){
                    $nick=$_GET["nick"];
                    echo '<input type="text" name="nick" placeholder="Username" value=' . $nick . '><br>';
                }else{
                    echo '<input type="text" name="nick" placeholder="Username"><br>';
                }
            }
            ?>
            <input type="password" name="pwd" placeholder="Password"><br>
            <input type="password" name="pwdconf" placeholder="Confirm Password"><br>
        </label>
        <button type="submit" name="submit">Sign Up</button>

        <?php
        if (isset($_GET["submit"])) {
            switch ($_GET["submit"]) {
                case "pwderror":
                    echo "<h3>Password didn't match!</h3>";
                    break;
                case "empty":
                    echo "<h3>Please fill in all the fields!</h3>";
                    break;
                case "invalidemail":
                    echo "<h3>Please enter a valid Email</h3>";
                    break;
                case "uidlengtherror":
                    echo "<h3>Username too long!</h3>";
                    break;
                case "emailtaken":
                    echo "<h3>Email already taken!</h3>";
                    break;
                case "usernametaken":
                    echo "<h3>Username already taken!</h3>";
                    break;
                case "success":
                    echo "<h3>Account successfully created!</h3>";
                    break;
                default:
                    echo "<h3>An Error has occurred!</h3>";
            }
        }
        ?>
    </div>
</form>
</body>
</html>