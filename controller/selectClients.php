<?php 
	include_once "model/class/User.class.php";

	$user = new User;

	$all_clients = $user->selectAllClients();
	
?>