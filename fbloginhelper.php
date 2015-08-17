<?php 
session_start();
$_SESSION['user_session'] = 'fbLogin';
header('Location: /new/index.php');

