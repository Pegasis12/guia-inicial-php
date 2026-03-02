<?php 
  // Funções associadas a arrays
  // Existem dezenas d funcoes para arrays
  // Arrays é um tipo de dado muito importante para o PHP

  // vamos conhecer algumas funcoes de maior destaque
  $nomes = ["pablo", 'joao', 'pedro', 'alberto'];

  // queremos saber se uma varaivel é um array?
  $resultado = is_array($nomes); // true
  echo $resultado . '<br>';

  // queremos saber quantos elementos tem um array?
  $resultado = count($nomes); // 
  echo $resultado . '<br>';

  // add valores ao final do array
  array_push($nomes, "fernando", "manuel");
  echo '<pre>';
  print_r($nomes);
  echo '</pre>';

  // adicionar valores ao inicio do array
  array_unshift($nomes, "marcos");
  echo '<pre>';
  print_r($nomes);
  echo '</pre>';
?>