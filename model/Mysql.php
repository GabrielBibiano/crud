<?php  
	class Mysql{
		public $a;
		
		function __construct(){
			try {
				$this->pdo = new PDO('mysql:host=localhost;dbname=crud;charset=utf8', 'root', 'root');
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo "Exception: " . $e->getMessage();
			}
		}

		public function getMysql(){
			return $this->pdo;
		}
	}

?>