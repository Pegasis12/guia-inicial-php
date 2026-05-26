<?php 
  echo '<pre>';

  // uma forma muito simples de obter o 
  // tamanho de um ficheiro em bytes
  $dados = filesize("registros.txt");
  echo $dados . " bytes";

  echo "<hr>";

  // e para obeter varias informacoes 
  // sobre um determinado ficheiro
  $info = pathinfo("registros.txt");
  print_r($info);
?>