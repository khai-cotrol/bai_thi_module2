<?php


namespace App\Model;

use \PDO;
use \PDOException;
class DBconnect
{
    private $dsn;
    private $username;
    private $password;
    public function __construct()
    {
        $this->dsn="mysql:host=localhost;dbname=productssss;charset=utf8";
        $this->username = "root";
        $this->password = "Khai@123";
    }
    public function connection()
    {
        try {
            return new PDO($this->dsn,$this->username,$this->password);
        }catch (PDOException $e){
            echo $e->getMessage();
            die();
        }
    }

}