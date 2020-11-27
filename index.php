<?php
include "includes/class-autoloader.inc.php";
include "includes/header.inc.php";
?>
<h3>Home</h3>
<div class="login-msg">
    <section class="section-default">
        <?php
        if (isset($_SESSION["user_id"])) {
            echo '<p class="loginstatus"> You are logged in!</p>';
        } else {
            echo '<p class="loginstatus"> You are logged out!</p>';
        }
        ?>
    </section>
</div>
<div id="adobe-dc-view">
    <div style="margin: 50px;">
        <label for="file-picker">Choose a PDF File:</label>
        <input type="file" id="file-picker" name="file-picker" accept="application/pdf">
    </div>
</div>
<script type="text/javascript" src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
<!--
<div id="adobe-dc-view" style="width: 800px;"></div>
<script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
<script type="text/javascript">
    document.addEventListener("adobe_dc_view_sdk.ready", function () {
        var adobeDCView = new AdobeDC.View({
            clientId: "abf118ce53e8470a921ada908de0c4c6",
            divId: "adobe-dc-view"
        });
        adobeDCView.previewFile({
            content: { location: { url: "files" } },
            metaData: { fileName: "Aiden_Buchman.pdf" }
        }, {
            embedMode: "IN_LINE",
            showDownloadPDF: false,
            showPrintPDF: false
        });
    });
</script>
-->
<!--
<iframe frameborder="0" scrolling="no"
        width="640" height="640"
        src="files/Aiden_Buchman.pdf">
</iframe>
-->
</body>
</html>