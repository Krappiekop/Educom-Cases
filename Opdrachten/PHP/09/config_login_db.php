<?php

class databaseService
{

    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $dbname = "php_opdrachten";
    private $pdo = null;
    
    public function connect()
    {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Could not connect to the database $this->dbname :" . $e->getMessage());
        }
    }
    public function disconnect(){
        $this->pdo = null;
    }
}
?>