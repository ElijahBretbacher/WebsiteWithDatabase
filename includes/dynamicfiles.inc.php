<?php
$userView = new UserView();

if (isset($_SESSION["user_id"])) {
    $results = $userView->getOrders($_SESSION["user_id"]);
    for ($i = 0, $iMax = count($results); $i < $iMax; $i++) {
        $name = $results[$i]["file_name"];
        $id = $results[$i]["file_id"];
        echo "<li><a id='" . $id . "' href='displayfile.php?file_name=" . $name . "&id=" . $id . "'>" . $name . "_" . $id . "</a></li>";
    }
} else {
    header("location: myorders.php?sessionerror");
}