<?php 
  // $_COOKIE
  // TODOS OS COOKIES REALACIONADOS COM A APLICACAO E RESPECTIVOS VALORES

  echo "<pre>";
  print_r($_COOKIE);

  echo "<br>";
  // podemos definir tbm qual cookies respectivo queremos buscar aquele valor
  echo ($_COOKIE["PHPSESSID"]);
  // vai aparecer no cookie o PHPSESSID pq no index_3 eu abri uma sessão
  // e essa sessão cria no cookie essa variavel
?>
