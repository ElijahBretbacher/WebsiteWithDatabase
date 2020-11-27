<?php
include "includes/class-autoloader.inc.php";
include "includes/header.inc.php";
?>

<form action="includes/userlogin.inc.php" method="post">
    <div class="login">
        <label>
            <?php
            if (isset($_GET["nick"])) {
                $nick = $_GET["nick"];
                echo '<input type="text" name="nick" placeholder="Email or Username" value=' . $nick . '><br>';
            } else {
                echo '<input type="text" name="nick" placeholder="Email or Username"><br>';
            }
            ?>
            <input type="password" name="pwd" placeholder="Password"><br>
        </label>
        <button type="submit" name="submit">Log In</button>
    </div>
</form>

</body>
</html>