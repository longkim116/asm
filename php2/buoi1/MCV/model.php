<?php
    include 'config.php';

    function getAlluser(){
        global $pdo;
        $sql = 'select * from user';
        $query = $pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
    function getUser($user_id){
        global $pdo;
        $sql = "select * from users where id = '$user_id'";
        $query = $pdo->query($sql);
        $result = $query->fetch();
        return $result;
    }
?>