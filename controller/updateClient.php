<?php  
	include_once "../model/class/User.class.php";
		
	$id = $_GET['id'];
	$name_emp = $_POST['name_emp'];
	$razao_emp = $_POST['razao_emp'];
	$email_emp = $_POST['email_emp'];
	$endereco_emp = $_POST['endereco_emp'];
	$tel_emp = $_POST['tel_emp'];

	$user = new User;

	$user->updateClient($id, $name_emp, $razao_emp, $email_emp, $endereco_emp, $tel_emp);
	
?>