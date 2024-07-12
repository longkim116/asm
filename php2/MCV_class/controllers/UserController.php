<?php
namespace controller;
use models\UsersModel;
class UserController{
    public function getUser(){
        $userModel = new UsersModel();
        return $userModel->getListUser();
    }
}