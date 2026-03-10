<?php 
  // parametros de uma funcao

  // podemos definir paramtros opcionais, dentro de uma funcao
  // sao parametros que ja tem um valor padrao atribuido
  // se passamos um argumento para esse paramtro, o valor passado sera usado

  function multiplicar($a, $b = 5){
    return $a * $b;
  }

  echo multiplicar(10); // 50 pois faz 10 x 5 ja argumentado na propria funcao
  echo "<br>";
  echo multiplicar(10, 3); // 30 pois escreve por cima do argumento feito na propria funcao

  // importante: os parametros opcionais devem sempre ser definidos
  // depois dos parametros nao opcionais
?>