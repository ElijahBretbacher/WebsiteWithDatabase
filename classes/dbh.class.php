<?php
class Dbh{
    private $host="localhost";
    private $user="root";
    private $pwd="";
    private $dbName="website";
    private $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->pwd, $this->dbName);
    }

    protected function connect(){
        //This refers to the database
        $dsn="mysql:host=" . $this->host . ";dbname=" . $this->dbName;

        //This logs us in
        $pdo=new PDO($dsn, $this->user, $this->pwd);

        //Optional Attribute (recommended)
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }

    /**
     * @return false|mysqli
     */
    public function getConnection()
    {
        return $this->connection;
    }


}