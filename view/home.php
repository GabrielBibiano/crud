	<div class="row main align-middle">
		<div class="small-12 medium-12 large-10 small-centered medium-centered large-centered">
			<div class="small-10 medium-5 large-5 columns panel">
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
					<p>
						<input type="submit" class="button expanded" value="Logar">
					</p>
				</form>
		  	</div>

			<div class="small-10 medium-5 large-5 columns panel">
				<form class="login-form" action="controller/createUser.php" method="POST">
					<h4 class="text-center">Cadastrar-se</h4>
					<label>
						Usuário
					  <input type="text" name="user" placeholder="ex: gabrielbibiano">
					</label>
					<label>
						Email
					  <input type="email"  name="email" placeholder="gabrielbibiano@example.com">
					</label>
					<label>
						Senha
					  <input type="password"  name="pass" placeholder="minha@1245senha">
					</label>
					<input type="submit" class="button expanded" value="Cadastrar">
				</form>
		  </div>
		</div>
	</div>