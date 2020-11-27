<?php
include "includes/header.inc.php";
require_once "classes/userview.class.php";
$userView=new UserView();
$file=$userView->getOrder($_GET["id"]);
?>

<div id="adobe-dc-view"></div>
<script type="text/javascript">
    document.addEventListener("adobe_dc_view_sdk.ready", function()
    {
        var adobeDCView = new AdobeDC.View({clientId: "abf118ce53e8470a921ada908de0c4c6", divId: "adobe-dc-view"});
        var id=document.head.id;
        adobeDCView.previewFile(
            {
                content:  {location: {url: "files/Aiden_Buchman.pdf"}},
                metaData: {fileName: "Aiden_Buchman.pdf"}
            });
    });
</script>
</body>
</html>