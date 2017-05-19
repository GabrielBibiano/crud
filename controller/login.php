<?php  
	ini_set('display_errors', 1);

	include_once "../model/class/User.class.php";

	session_start();

	$user = $_SESSION['user'];

	if (isset($user)) {
		header('location: painel.php');
	}

	$login_user = $_POST['user']; 
	$login_pass = $_POST['pass'];

	//CÓDIGO SQL PARA BUSCAR USUÁRIOS NO BANCO
	$sql = 'SELECT * FROM `users` WHERE user = :user AND password = :pass';

	try{
		$mysql = new Mysql;

		//PREPARA A O CÓDIGO SQL
		$query = $mysql->getMysql()->prepare($sql);

		//SUBSTITUI O VALOR NO CAMPO DA QUERY
		$query->bindValue(':user', $login_user, PDO::PARAM_STR);
		$query->bindValue(':pass', sha1(md5($login_pass)), PDO::PARAM_STR);

		//EXECUTA A QUERY
		$query->execute();

		if($query->rowCount() > 0) {
			$bd_user = $query->fetchAll();
			$_SESSION['user'] = $bd_user[0];

		  header('location: ../index.php?info=login_success');
		}else{
			header('location: ../index.php?info=login_error');
		}
	}catch(PDOException $e){
		echo $e->getMessage();
	}

?>