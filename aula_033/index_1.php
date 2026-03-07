<?php 
  // precendencia de operadores

  // frequentenmente os operadores sao combinados para formar expressoes complexas
  // quando isso acontece, eles são tratados de acordo com a sua precendencia
  // no PHP ela funcikona maioritariamente da mesma forma como funciona a precedencia matematica

  $resultado = 10 + 20 * 4;
  // a multiplicacao acotnece primeiro (20 * 4 = 80)
  // depois acontece a adicao (10 + 80 = 90)

  // Podemos forcar precedencia usando parenteses
  $resultado = (10 + 20) * 4;
  // neste caso a adicao acontece primeiro e so depois a multplicacao
  // 30 * 4 = 120;

  $valor = 4;
  $valor2 = 2;
  $valor3 = 10;

  $resultado = $valor / $valor2 * $valor3;
  echo $resultado;

  // No decorrer do estudo da liguagem iremos aprofundar essas precedencias sempre que necessario
?>  