<?php 
  // A SUPER GLOBAL $_GET

  // vamos usar o endereço:
  // http://localhost/aula_061/index_2.php?id=100

  // para captar um determinado valor da query string, recorremos
  // à chave do array associativo da super global $_GET
  // existe pois passamos a url dessa forma ai mostra o que tem
  echo $_GET['id'];

  // Mas cuidado. Se a variável não existir vai surgir um erro.
  // echo $_GET['teste'];
  
  // por isso devemos sempre verificar se existe depois captar o parametro
  // isset = se esta definido
  // http://localhost/aula_061/index_2.php?id=100&teste=pablo
  $valor = null;
  if(isset($_GET["teste"])){
    $valor = $_GET["teste"];
  }

  echo "<br>";
  echo "Valor: $valor"; // Valor: Pablo
?>