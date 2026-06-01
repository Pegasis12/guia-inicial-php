<?php 
  // $_SERVER -
  // INFORMACOES SOBRE O SERVIDDOR E AMBIENTE DE EXECUCAO

  // nome do script atualmente em execucao
  echo $_SERVER["PHP_SELF"] . "<br>";

  // endereco IP do servidor
  echo $_SERVER["SERVER_ADDR"] . "<br>";

  // nome do servidor
  echo $_SERVER["SERVER_NAME"] . "<br>";

  // informacoes sobre o sistema do servidor
  echo $_SERVER["SERVER_SOFTWARE"] . "<br>";

  // informacoes sobre o sistema do servidor
  echo $_SERVER["SERVER_PROTOCOL"] . "<br>";

  // PASTA RAIZ DA APLICACAO
  echo $_SERVER["DOCUMENT_ROOT"] . "<br>";

  // Existem varias outras informacoes que podemos 
  // recolher com esta super global
?>
