<?php 
  ini_set('display_errors', 1);

  // REQUER A CONEXÃO
  require_once "../model/User.php";

  $form_user = $_POST['user'];
  $form_email = $_POST['email'];
  $form_pass = $_POST['pass'];

  $user = new User();

  $user->createUser($form_user, $form_email, $form_pass);
?>