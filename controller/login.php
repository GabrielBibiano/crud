<?php  
		
	include_once "../model/User.php";

	$user = new User();

	$login_user = $_POST['user']; 
	$login_pass = $_POST['pass'];

	$user->login($login_user, $login_pass);
?>