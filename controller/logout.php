<?php  
	ini_set('display_errors', 1);
	include_once "../model/User.php";

	$user = new User();

	$user->logout();
?>