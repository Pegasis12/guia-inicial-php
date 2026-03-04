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

  // retira um valor do final do array
  $resultado = array_pop($nomes); // retira do final de array de nome o ultimo resultado
  echo $resultado . '<br>'; // resultado passa a ter o valor retirado "manuel"
  echo '<pre>';
  print_r($nomes); // e nome passa a ter a array normal mas sem op manuel
  echo '</pre>';

  // retira um valor do inicio do array
  $resultado = array_shift($nomes); // retira o primeiro item do array de nomes
  echo $resultado . '<br>'; // resultado passa a ter o valor retirado do inicio "marcos"
  echo '<pre>';
  print_r($nomes); // e nome passa a ter a array normal mas sem o marcos no inicio
  echo '</pre>';

  // tambem podemos eliminar um determinado elemento do array com seu indice
  unset($nomes[0]); // remove o primeiro elemento zero do array
  echo '<pre>';
  print_r($nomes);
  echo '</pre>';
?>