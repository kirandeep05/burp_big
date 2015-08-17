<?php
	session_start();
	include_once '../admin/include/Connection.class.php';
	$userobj = new connection();
	$passkey = $_GET['passkey'];
	$value = "verified";
	$query = "UPDATE `bb_user_login` SET `com_code` = :value WHERE `com_code` = :passkey";
	$bindParams = array("value" => $value, "passkey" => $passkey);
	
	try{
	if($userobj->insertQuery($query, $bindParams)){
		echo '<div>Your account is now active. You may now <a href="login.php">Log in</a></div>';
	}
	}
	catch(PDOException $e)
		{
			echo $e->getMessage();
		}
?>