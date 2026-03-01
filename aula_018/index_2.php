<?php 
  // interiros int
  // os valores são normalmente definidos com numeros inteiros
  $valor1 = 100;
  echo $valor1 . '<br>'; // 100

  // mas podem ser definidos com valores hexadecimais
  $valor2 = 0xa3;
  echo $valor2 . '<br>'; // 163

  //ou ainda no sistema octal
  $valor3 = 045;
  echo $valor3 . '<br>'; // 37

  // ou ainda com valores binarios
  $valor4 = 0b101;
  echo $valor4 . '<br>'; // 5

  // vejamos o que acontece quando ultrapssamos o limite do valor inteiro
  $valor_ultrapassado = PHP_INT_MAX + 1;
  echo $valor_ultrapassado . '<br>';

  var_dump($valor_ultrapassado); //mostra que e um tipo floar pois o limite ultrapassado passa a ter casas decimais
  echo '<br>';
?>