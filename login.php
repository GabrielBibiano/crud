<?php include_once "model/urls.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD Clientes</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="row main align-middle">
		<div class="small-10 medium-5 large-4 small-centered medium-centered large-centered columns">
			<form class="login-form" action="controller/login.php" method="POST">
				<h4 class="text-center">Fazer Login</h4>
				<label>
					Usuário
				  <input type="text" name="user" placeholder="ex: gabrielbibiano">
				</label>
				<label>
					Senha
				  <input type="password" name="pass" placeholder="minha@1245senha">
				</label>
				<input id="show-password" type="checkbox">
				<label for="show-password">
					Lembrar minhas credenciais
				</label>
				<p>
					<input type="submit" class="button expanded" value="Logar">
				</p>
			</form>
	  </div>
	</div>
</body>
</html>

