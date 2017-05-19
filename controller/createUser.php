<?php 

  ini_set('display_errors', 1);

  // REQUER A CONEXÃO
  require_once "../model/class/Mysql.class.php";

	$mysql = new Mysql;

  $cad_user = $_POST['user'];
  $cad_email = $_POST['email'];
  $cad_pass = $_POST['pass'];

	//CÓDIGO SQL PARA BUSCAR USUÁRIOS NO BANCO
	$sql = 'SELECT * FROM `users` WHERE user = :user OR email = :email';

	try{

		//PREPARA A O CÓDIGO SQL
		$query = $mysql->getMysql()->prepare($sql);

		//SUBSTITUI O VALOR NO CAMPO DA QUERY
		$query->bindValue(':user', $cad_user, PDO::PARAM_STR);
		$query->bindValue(':email', $cad_email, PDO::PARAM_STR);

		//EXECUTA A QUERY
		$query->execute();

		if($query->rowCount() > 0) {
		  header('location: ../index.php?info=already_exists');
		}else{

			//CÓDIGO SQL PARA INSERÇÃO NO BANCO
			$sql_ = 'INSERT INTO `users`(id, user, email, password) VALUES (NULL, :user, :email, :pass)';

			try{

				//PREPARA O CÓDIGO SQL
				$query = $mysql->getMysql()->prepare($sql_);
				 
				//SUBSTITUI O VALOR NO CAMPO DA QUERY
				$query->bindValue(':user', $cad_user, PDO::PARAM_STR);
				$query->bindValue(':email', $cad_email, PDO::PARAM_STR);
				$query->bindValue(':pass', sha1(md5($cad_pass)), PDO::PARAM_STR);
				         
				//EXECUTA A QUERY
				$query->execute();

				session_start();

				$bd_user = [
					$cad_user,
					$cad_email
				];

				$_SESSION['user'] = $bd_user;

				header('location: ../index.php?info=login_success');

			}catch(PDOException $e){
				echo $e->getMessage();
			}  

		}

	}catch(PDOException $e){
		echo $e->getMessage();
	}

?>