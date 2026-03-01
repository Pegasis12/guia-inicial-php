<?php 
 // INTEIROS int 
 // são numeros sem casas decimais, positivos, negativos ou o zero

  $valor1 = 100;
  $valor2 = 12323400;
  $valor3 = 0;
  $valor4 = -2330;

  // em siistemas de 32 bits e 64 bits, temos
  // Limite maximo e minimos diferentes

  // podemos ver os limites usando constantes nativas do PHP
  // numero minimo de valor inteiro aceito e maximo, diferentes pra sistema de 32 bits e 64
  echo PHP_INT_MIN . '<br>';
  echo PHP_INT_MAX . '<br>';
?>