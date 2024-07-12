<?php
namespace models;
use common\Database;
class UsersModel{
    public function getListUser(){
        $db = new Database();

        $sql = 'select * from users';
        $query = $db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
}