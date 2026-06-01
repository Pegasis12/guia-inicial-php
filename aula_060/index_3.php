<?php 
  // $_SESSION
  //  Acesso para leitura e manipulacao das variaveis da sessao

  // mt importante sempre executar a sessão
  session_start();

  $_SESSION["usuario"] = "joão";
  $_SESSION["perfil"] = "admin";
  $_SESSION["autorizado"] = true;

  echo "<pre>";
  print_r($_SESSION);
?>
