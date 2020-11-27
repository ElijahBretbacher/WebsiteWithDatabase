<?php
include "includes/class-autoloader.inc.php";
include "includes/header.inc.php";
?>
<h3>Blog</h3>
<div class="login-msg">
    <section class="section-default">
        <?php
        if (isset($_SESSION["user_id"])){
            echo '<p class="loginstatus"> You are logged in!</p>';
        }else{
            echo '<p class="loginstatus"> You are logged out!</p>';
        }
        ?>
    </section>
</div>
</body>
</html>