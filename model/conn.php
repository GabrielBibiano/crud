<?php  
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=crud;charset=UTF-8', 'root', 'root');
		$pdio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo "Exception: " . $e->getMessage();
	}

?>