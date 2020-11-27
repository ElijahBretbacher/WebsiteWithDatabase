<?php
session_start();
include_once "../classes/useroperator.class.php";
$userOperator=new UserOperator();

$name=$_FILES["fileinput"]["name"];
$type=$_FILES["fileinput"]["type"];
$data=file_get_contents($_FILES["fileinput"]["tmp_name"]);

if (isset($_SESSION)){
    if (isset($_POST)) {
        $userOperator->setOrder($_SESSION["user_id"], $name, $type, $data);
        header("location: ../uploadfile.php?submit=success");
    }else{
        header("location: ../uploadfile.php?submit=error");
    }
}else
    header("location: ../uploadfile.php?submit=sessiontimeout");

echo $name, $type, $data;