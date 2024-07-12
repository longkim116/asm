<?php
include 'model.php';
$list_user = getAlluser();
$user_id = (!empty($_GET['userid']) ? $_GET['userid']:'');
include 'view.php';