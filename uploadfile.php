<?php
    include "includes/header.inc.php";
?>
<form action="includes/uploadfile.inc.php" method="post" enctype="multipart/form-data">
    <div class="fileupload">
        <label>
            <input type="file" name="fileinput">
            <button type="submit" name="submit">Add Order</button>
        </label>
    </div>
</form>

</body>
</html>
