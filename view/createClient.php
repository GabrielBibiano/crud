
  <h3>Adicionar Cliente</h3>

  <?php 
    if (isset($_GET['update_client'])): 

      $id = $_GET['update_client'];

      include_once "controller/selectClient.php"; 
      $action = "controller/updateClient.php"; 
      $btn_value = "Atualizar Registro"; 

    else: 
      $action = "controller/createClient.php"; 
      $btn_value = "Adicionar Cliente"; 
    endif; 
  ?>


  <form action="<?php echo $action . '?id=' . $id ;?>" method="POST">
    <div class="row">
      <div class="large-6 columns">
        <label>Nome da Empresa
          <input type="text" name="name_emp" placeholder="" value="<?php echo $client['name']; ?>" required/>
        </label>
      </div>
      <div class="large-6 columns">
        <label>Razão social
          <input type="text" name="razao_emp" placeholder="Empresa Fulana de Tal" value="<?php echo $client['razao']; ?>" required/>
        </label>
      </div>
    </div>
    <div class="row">
       <div class="large-4 columns">
        <label>Email
          <input type="text" name="email_emp" placeholder="empresa@dominio.com" value="<?php echo $client['email']; ?>" required/>
        </label>
      </div>
      <div class="large-4 columns">
        <label>Endereço
          <input type="text" name="endereco_emp" placeholder="Rua da Asa" value="<?php echo $client['endereco']; ?>" required/>
        </label>
      </div>
      <div class="large-4 columns">
        <label>Telefone</label>
        <div class="small-12">
          <input type="text" id="telefone" maxlength="15" name="tel_emp" placeholder="(85) 3257-4339" value="<?php echo $client['telefone']; ?>" required/>
        </div>
      </div>
    </div>

    <input type="submit" class="button btn-large" value="<?php echo $btn_value; ?>">
  </form>
