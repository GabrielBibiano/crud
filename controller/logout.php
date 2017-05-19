<?php  
	ini_set('display_errors', 1);

	include_once "../model/class/User.class.php";

	$user = new User();

	$user->logout();
?>