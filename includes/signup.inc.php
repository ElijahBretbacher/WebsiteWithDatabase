<?php
require_once "../classes/dbh.class.php";
require_once "../classes/useroperator.class.php";
require_once "../classes/userview.class.php";

$db=new Dbh();
$userView=new UserView();
$connection=$db->getConnection();

$email=mysqli_real_escape_string($connection, $_POST["email"]);
$nick=mysqli_real_escape_string($connection, $_POST["nick"]);
$pwd=mysqli_real_escape_string($connection, $_POST["pwd"]);
$pwdConf=mysqli_real_escape_string($connection, $_POST["pwdconf"]);

if (!isset($_POST["submit"])){
    header("location: ../signup.php?submit=error");
    exit();
}elseif($pwd!==$pwdConf){
    header("location: ../signup.php?submit=pwderror&email=" . $email . "&nick=" . $nick);
    exit();
}elseif(empty($email) || empty($nick) || empty($pwd) || empty($pwdConf)){
    header("location: ../signup.php?submit=empty&email=" . $email . "&nick=" . $nick);
    exit();
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("location: ../signup.php?submit=invalidemail&nick=" . $nick);
    exit();
}elseif (strlen($nick) > 20){
    header("location: ../signup.php?submit=uidlengtherror&email=" . $email);
    exit();
}else{
    //Here is checked, if the username and email submitted are unique
    $resultEmail=$userView->getEmail($email);
    $resultUser=$userView->getUser($nick);
    //if the count of the users with the same username or email > 0 --> error message
    if (count($resultEmail)>0){
        header("location: ../signup.php?submit=emailtaken&nick=" . $nick);
    }elseif(count($resultUser)>0) {
        header("location: ../signup.php?submit=usernametaken&email=" . $email);
    }else{
        $create = new UserOperator();
        $create->createUser($nick, $email, $pwd);

        $user = $userView->getUser($nick);
        session_start();
        $_SESSION["user_id"] = $user[0]["user_id"];
        $_SESSION["user_nick"] = $user[0]["user_nick"];
        header("location: ../login.php?submit=success");
        header("location: ../signup.php?submit=success");
    }
}
