<?php
require_once "dbh.class.php";
class User extends Dbh {
    protected function setPost($subject, $desciption){
        $sql = "INSERT INTO posts(post_userid, post_subject, post_desciption) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
    }

    protected function setUser($nick, $email, $pwd){
        $sql = "INSERT INTO users(user_nick, user_email, user_pwd) VALUES (?, ?, ?)";
        $stmt= $this->connect()->prepare($sql);

        $stmt->execute([$nick, $email, $pwd]);

    }

    protected function getAllUsernames(){
        $sql = "SELECT user_nick FROM users";
        $stmt=$this->connect()->exec($sql);
    }

    protected function getAllEmails(){
        $sql="SELECT user_email FROM users";
        $stmt=$this->connect()->exec($sql);
    }

    protected function getEmail($email){
        $sql="SELECT * FROM users WHERE user_email=?";

        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$email]);


        return $stmt->fetchAll();
    }

    protected function getUser($nick){
        $sql="SELECT * FROM users WHERE user_nick=?";

        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$nick]);

        return $stmt->fetchAll();
    }

    protected function getOrders($userID){
        $sql="SELECT * FROM files WHERE file_parent_id=?";

        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$userID]);

        return $stmt->fetchAll();
    }

    protected  function setOrder($userID, $fileName, $fileExt, $fileData){
        $sql="INSERT INTO files(file_parent_id, file_name, file_ext, file_data) VALUES (?, ?, ?, ?)";

        $stmt=$this->connect()->prepare($sql);

        $stmt->execute([$userID, $fileName, $fileExt, $fileData]);
    }

    protected function getOrder($fileID){
        $sql="SELECT * FROM files WHERE file_id=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$fileID]);

        return $stmt->fetchAll();
    }
}
