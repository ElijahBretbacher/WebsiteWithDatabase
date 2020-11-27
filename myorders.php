<?php
include "includes/class-autoloader.inc.php";
include "includes/header.inc.php";
?>

<?php
if (!isset($_SESSION["user_id"])){
    echo "<h3>Please Log in to have access to this Tab!</h3>";
}else{
    echo '
<div class="ordersnav">
    <!--<label for="fileinput">Choose a file: </label>
    <input type="file" name="fileinput" accept="application/pdf">-->
    <div class="ordersbtn">
        <a href="uploadfile.php">New</a>
        <a href="">Edit</a>
    </div>
</div>
<div class="filenav">
<div id="adobe-dc-view">

    <ul>';

    include_once "includes/dynamicfiles.inc.php";

    echo '
</div>
    </ul>
</div>';
}


?>

</body>
</html>