<?php 
  // NULL

  // É UM TIPO ESPECIAL DE DADO.
  // Representa uma variavel sem valor ou com valor nulo

  $valor = null; // (case-insensitive) podemos ecrever NULL ou null
  echo "valor: $valor"; // valor:  aparece sem nada
  var_dump($valor); // NULL
  echo '<br>';
  var_dump('teste'); // string(5) "teste"

  var_dump($numero); // var dump de uma variavel que n existe, NULL
  echo '<br>';

  $valor2 = 100;
  echo $valor2; // 100
  unset($valor2); // deixa de existir, unset tira ela da memoria
  echo '<br>';
  var_dump($valor2); // NULL pois valor2 n existe e var_dump faz um inspeção de um dado que não existe retornando Nulo
?>