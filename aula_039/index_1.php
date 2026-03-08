<?php 
  // CICLOS

  // Os ciclos permitem a repetição de blocos de codigo ate que uma
  // determinada condição interrompa a sua execução
  // São estruturas muito presentes em qualquer script PHP

  // ------------------------------------
  // WHILE

  // Enquanto a condição for verdadeira, o codigo é repetido
  $valor = 1;
  while($valor <= 10){
    echo "Valor: $valor</br>";
    $valor++;
  }

  // IMPORTANTE: Se não alterarmos o valor da condição,
  // o ciclo fica infinito, pois ela nunca vai alcançar a condição de parada

  // Outro exemplo fazendo multiplicações do valor de 1 a 10 por 3
  // tabuada do 3
  echo "<hr>";
  $valor = 1;
  while($valor <= 10){
    echo "3 x $valor = " . $valor * 3 . "</br>";
    $valor++;
  }
?>