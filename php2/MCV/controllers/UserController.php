<?php
    function showUser(){
        $list_user = getAllUser();
        require_once 'views/listUser.php';
    }
    function showDetailUser($user_id){
        $user = getUser($user_id);
        require_once 'views/detailUser.php';
    }
    function addUser(){
        require_once 'views/addUser.php';
    }
    function addPostUser($name, $age, $address){
        addUserModel($name, $age, $address);
        header('location: ' . BASE_URL);
    }