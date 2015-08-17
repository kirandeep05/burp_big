<?php
session_start();
require_once '../admin/include/Connection.class.php';
include_once '../admin/include/User.class.php';
$user = new User();
$user->logout();
$user->redirect("index.php");
?>