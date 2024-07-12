<?php
require_once 'common\Database.php';
require_once 'models\UserModel.php';
require_once 'controllers\userController.php';
 use controller\UserController;
 $userController = new UserController();
 $listUser = $userController->getUser();
 var_dump($listUser);