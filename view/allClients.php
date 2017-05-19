	<?php include_once "controller/selectClients.php"; ?>
	
	<table>
	  <caption>Todos os clientes</caption>
	  <tr>
	    <th scope="column">Nome da Empresa</th>
	    <th scope="column">Email</th>
	    <th scope="column">Ações</th>
	  </tr>
		<?php foreach ($all_clients as $value): ?>
		 	<tr scope="column">
		   	<td scope="row">
		   		<?php echo $value['name']; ?>
		   	</td>
		   	<td>
		   		<?php echo $value['email']; ?>
		   	</td>
		   	<td>
		   		<a href="index.php?update_client=<?php echo $value['id']; ?>">Editar</a>
		   		<a class="delete-client" href="controller/deleteClient.php?id=<?php echo $value['id']; ?>">Excluir</a>
		   	</td>
 			</tr>
		<?php endforeach; ?>
	</table>