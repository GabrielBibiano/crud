<?php  
	include_once "Mysql.class.php";

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

		public function logout(){

			session_start();
					
			session_destroy();

			header('location: ../index.php?info=logout');

			exit;
		}

		public function createClient($name_emp, $razao_emp, $email_emp, $endereco_emp, $tel_emp){

			//CÓDIGO SQL PARA CRIAR CLIENTE
		  $sql = 'INSERT INTO `clients` VALUES(NULL, :name_emp, :razao_emp, :email_emp, :endereco_emp, :tel_emp)';

		  try{

		  	$mysql = new Mysql;

		    //PREPARA A O CÓDIGO SQL
		    $query = $mysql->getMysql()->prepare($sql);

		    //SUBSTITUI O VALOR NO CAMPO DA QUERY
				$query->bindValue(':name_emp', $name_emp, PDO::PARAM_STR);
				$query->bindValue(':razao_emp', $razao_emp, PDO::PARAM_STR);
				$query->bindValue(':email_emp', $email_emp, PDO::PARAM_STR);
				$query->bindValue(':endereco_emp', $endereco_emp, PDO::PARAM_STR);
				$query->bindValue(':tel_emp', $tel_emp, PDO::PARAM_STR);

		    //EXECUTA A QUERY
		    $query->execute();

		    header('location: ../index.php?info=create_client_success');

		  }catch(PDOException $e){
		  	echo $e->getMessage();
		  }

		  return $result;
		}

		public function selectAllClients(){

			//CÓDIGO SQL PARA BUSCAR USUÁRIOS NO BANCO
		  $sql = 'SELECT * FROM `clients`';

		  try{

		  	$mysql = new Mysql;

		    //PREPARA A O CÓDIGO SQL
		    $query = $mysql->getMysql()->prepare($sql);

		    //EXECUTA A QUERY
		    $query->execute();

		    if ($query->rowCount() > 0) {
		    	$result = $query->fetchAll();
		    }else{
		    	$result = "Não há nenhum cliente cadastrado.";
		    }

		  }catch(PDOException $e){
		  	echo $e->getMessage();
		  }

		  return $result;
		}

		public function selectClient($id){

			//CÓDIGO SQL PARA BUSCAR USUÁRIOS NO BANCO
		  $sql = 'SELECT * FROM `clients` WHERE id = :id';

		  try{
		  	$mysql = new Mysql;


		    //PREPARA A O CÓDIGO SQL
		    $query = $mysql->getMysql()->prepare($sql);

		  	//SUBSTITUI O VALOR NO CAMPO DA QUERY
				$query->bindValue(':id', $id, PDO::PARAM_STR);

		    //EXECUTA A QUERY
		    $query->execute();

		   	$result_client = $query->fetchAll();

		  }catch(PDOException $e){
		  	echo $e->getMessage();
		  }

		  return $result_client[0];
		}

		public function updateClient($id, $new_name_emp, $new_razao_emp, $new_email_emp, $new_endereco_emp, $new_tel_emp){

			//CÓDIGO SQL PARA BUSCAR USUÁRIOS NO BANCO
		  $sql = 'UPDATE `clients` SET `name` = :new_name_emp, `razao` = :new_razao_emp, `email` = :new_email_emp, `endereco` = :new_endereco_emp, `telefone` = :new_tel_emp WHERE `id` = :id';

		  try{

		  	$mysql = new Mysql;

		    //PREPARA A O CÓDIGO SQL
		    $query = $mysql->getMysql()->prepare($sql);

				$query->bindValue(':id', $id, PDO::PARAM_STR);
				$query->bindValue(':new_name_emp', $new_name_emp, PDO::PARAM_STR);
				$query->bindValue(':new_razao_emp', $new_razao_emp, PDO::PARAM_STR);
				$query->bindValue(':new_email_emp', $new_email_emp, PDO::PARAM_STR);
				$query->bindValue(':new_endereco_emp', $new_endereco_emp, PDO::PARAM_STR);
				$query->bindValue(':new_tel_emp', $new_tel_emp, PDO::PARAM_STR);

		    //EXECUTA A QUERY
		    $query->execute();

		   	header('location: ../index.php?info=updated_client');

		  }catch(PDOException $e){
		  	echo $e->getMessage();
		  }

		  return $result_client[0];
		}

		public function deleteClient($id){

			//CÓDIGO SQL PARA BUSCAR USUÁRIOS NO BANCO
		  $sql = 'DELETE FROM `clients` WHERE id = :id';

		  try{

		  	$mysql = new Mysql;

		    //PREPARA A O CÓDIGO SQL
		    $query = $mysql->getMysql()->prepare($sql);

		  	//SUBSTITUI O VALOR NO CAMPO DA QUERY
				$query->bindValue(':id', $id, PDO::PARAM_STR);

		    //EXECUTA A QUERY
		    $query->execute();

		   	header('location: ../index.php?info=deleted_client');

		  }catch(PDOException $e){
		  	echo $e->getMessage();
		  }

		}
	}

?>