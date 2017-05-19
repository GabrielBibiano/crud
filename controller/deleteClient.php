<?php  
	ini_set('display_errors', 1);

  require_once "../model/class/User.class.php";

	$id = $_GET['id'];

  $user = new User;
  
  $user->deleteClient($id);

?>