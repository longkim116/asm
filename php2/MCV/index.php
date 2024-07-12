<?php
    require_once 'common/env.php';
    require_once 'common/connect.php';
    require_once 'models/UserModel.php';
    require_once 'controllers/UserController.php';

   // http://localhost:8080/php2/php2-class/mvc2/index.php
    $act = (!empty($_GET['act']) ? $_GET['act'] : '/');
    switch($act){
        case '/':{
            showUser();
            break;
        }
        // ?act=chitietuser
        case 'chitietuser':{
            $user_id = (!empty($_GET['userid']) ? $_GET['userid'] : '');
            showDetailUser($user_id);
            break;
        }
        // ?act=themuser
        case 'themuser':{
            addUser();
            if(isset($_POST['btnSubmit'])){
                addPostUser(
                    $_POST['name'],
                    $_POST['age'],
                    $_POST['address']
                );
            }
            break;
        }
    }