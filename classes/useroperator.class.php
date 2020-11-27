<?php
require_once "user.class.php";
class UserOperator extends User{

    public function createUser($nick, $email, $pwd){
        //hash the pwd
        $hashedPwd=password_hash($pwd, PASSWORD_DEFAULT);

        parent::setUser($nick, $email, $hashedPwd);
    }

    public function getAllUsernames()
    {
        parent::getAllUsernames();
    }

    public function setOrder($userID, $fileName, $fileExt, $fileData)
    {
        parent::setOrder($userID, $fileName, $fileExt, $fileData);
    }
}