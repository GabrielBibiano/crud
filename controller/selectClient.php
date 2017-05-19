<?php 
	include_once "model/class/User.class.php";
	
	$user = new User;

	$client = $user->selectClient($id);

?>