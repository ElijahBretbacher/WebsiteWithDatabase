<?php
require_once "user.class.php";
class UserView extends User{
    public function getUser($nick)
    {
        return parent::getUser($nick);
    }

    public function getEmail($email)
    {
        return parent::getEmail($email);
    }

    public function getOrders($userID)
    {
        return parent::getOrders($userID);
    }

    public function getOrder($fileID)
{
    return parent::getOrder($fileID);
}
}