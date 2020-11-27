<?php
include "../classes/dbh.class.php";
include "../classes/userview.class.php";
$dbh=new Dbh();

$connection=$dbh->getConnection();

$nick=mysqli_real_escape_string($connection, $_POST["nick"]);
$pwd=mysqli_real_escape_string($connection, $_POST["pwd"]);

if (!isset($_POST["submit"])){
    header("location: ../login.php?submit=error");
}elseif (empty($nick) || empty($pwd)){
    header("location: ../login.php?submit=emptyfield&nick=" . $nick);
}else{
    $userView=new UserView();
    $user=$userView->getUser($nick);
    if (!sizeof($user)>0){
        header("location: ../login.php?submit=emptydb");
    }else{
        $userpwd=$user[0]["user_pwd"];
        if (!password_verify($pwd, $userpwd)){
            header("location: ../login.php?submit=pwderror&nick=" . $nick);
        }else{
            session_start();
            $_SESSION["user_id"] = $user[0]["user_id"];
            $_SESSION["user_nick"] = $user[0]["user_nick"];
            header("location: ../login.php?submit=success");
        }
    }
}