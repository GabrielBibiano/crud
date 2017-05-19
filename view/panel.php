<div>
	<h2 class="text-center">Painel</h2>
	<ul class="side-nav">
		<li class="user-line">
	  	<a>Olá, <?php echo $user['user']; ?></a>
	  </li>
	  <li class="sair">
	  	<a href="controller/logout.php">Sair</a>
	  </li>
	</ul>
	<div class="row container-painel">
		<div class="small-12 medium-12 large-12 small-centered medium-centered large-centered">
			<div class="small-12 medium-12 large-5 panel column">
				<?php include_once "view/createClient.php" ?>
			</div>

			<div class="all-clients small-12 medium-12 large-6 column"> 
				<?php include_once "view/allClients.php"; ?>
			</div>
		</div>
	</div>
</div>