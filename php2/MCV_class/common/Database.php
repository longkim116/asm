<?php
namespace common;
use PDO;
use PDOException;
class Database
{
    public $pdo;
    public function __construct()
    {
        $host = 'localhost';
        $db_name = 'php2';
        $user = 'root';
        $password = '';
        $port = '3306';
        $dsn = "mysql:host=$host;dbname=$db_name;port=$port;charset=UTF8";
        try {
            $this->pdo = new PDO($dsn, $user, $password);
            if ($this->pdo) {
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                // echo 'Connection successfully';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}