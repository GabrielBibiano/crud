<?php include_once "model/config.php";  ?>

<?php if (isset($_GET['info'])): $info = $_GET['info']; ?>
	<div class="<?php echo $info; ?>">
		<?php echo $all_info[$info];?>
	</div>
<?php endif; ?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD Clientes</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php  
		session_start();
		$user = $_SESSION['user'];

		if (isset($user)):
			include_once "view/panel.php";
		else:
			include_once "view/home.php";
		endif;
	?>
</body>
</html>

