<?php  
	include_once "Mysql.php";

	class User extends Mysql{

		private $user;
		private $email;
		private $pass;

		function __construct(){
			$this->user = '';
			$this->email = '';
			$this->pass = '';
		}

		public function getName(){
			return $this->name;
		}

		public function setName($new_name){
			$this->name = $new_name;
			return $this->name;
		}

		public function getUser(){
			return $this->user;
		}

		public function setUser($new_user){
			$this->user = $new_user;
			return $this->user;
		}

		public function getPass(){
			return $this->pass;
		}

		public function setPass($new_pass){
			$this->pass = $new_pass;
			return $this->pass;
		}

		public function createUser($cad_user, $cad_email, $cad_senha){

		  //CÓDIGO SQL PARA INSERÇÃO NO BANCO
		  $sql = 'INSERT INTO `users`(id, user, email, password) VALUES (NULL, :user, :email, :pass)';
		 
		  try{

		  	$mysql = new Mysql;

		    //PREPARA A O CÓDIGO SQL
		    $query = $mysql->getMysql()->prepare($sql);
		 
		    //SUBSTITUI O VALOR NO CAMPO DA QUERY
		    $query->bindValue(':user', $cad_user, PDO::PARAM_STR);
		    $query->bindValue(':email', $cad_email, PDO::PARAM_STR);
		    $query->bindValue(':pass', sha1(md5($cad_senha)), PDO::PARAM_STR);
		         
		    //EXECUTA A QUERY
		    $query->execute();

			  //REDIRECIONA AO INDEX
			  header("location: ../index.php");

		  }catch(PDOException $e){
		  	echo $e->getMessage();
		  }
		 
		}

		public function login($login_user, $login_pass){
			session_start();

			$user = $_SESSION['user'];

			if (isset($user)) {
				header('location: painel.php');
			}

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

		    if ($query->fetchColumn() > 0) {
		    	header('location: ../painel.php');
		    }else{
		    	header('location: ../idnex.php?error=login_error');
		    }

		  }catch(PDOException $e){
		  	echo $e->getMessage();
		  }

		}
	}

?>