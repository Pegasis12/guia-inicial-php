<?php 
  // verifica se  houve um reqquest do tipo POST
  if($_SERVER["REQUEST_METHOD"] != "POST"){
    die("Acesso Negado!");
  }

  echo "<pre>";
  print_r($_POST);
?>