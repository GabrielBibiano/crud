<?php 
	session_start();
	$user = $_SESSION['user'];
	
	if ($_SERVER['SCRIPT_NAME'] != '/crud/index.php') {
		(isset($user)) ? header('location: painel.php') : header('location: index.php');
	}else{

	}

?>