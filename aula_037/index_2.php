<?php 
  // expressao match

  // podemos tambem analisar multiplas condições de comparação
  // também não precisamos do default
  $valor = 100;

  // ao invez de analisar o resultado de match, podemos apenas passar match
  // como true e analisar dentro dele as possibilidades
  $resultado = match(true) {
    $valor > 100 => "Valor é maior que 100.",
    $valor == 100 => "Valor é igual a 100.",
    $valor < 100 => "Valor é menor que 100.",
  };

  // dropamos o valor de resultado para mostrar o match
  echo $resultado;
?>