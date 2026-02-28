<?php 
  // bolleans
  // são variaveis com dois valores possiveis: verdadeiro ou falso

  $apresentar_nome = true;
  $apresentar_idade = false;

  // os valores são case insensitive
  $mostrar = TRUE; // O MESMO QUE $mostrar = true;
  $numero = 10;

  // veremso que podemos converter valores em booleanos
  // tradicionmalmente, o valor zero 0 é equivalente a false e todos os outros
  // valores sao equivalentes a true

  // podemos ainda determinar se uma variave é booleana ou não
  // is_bool é uma fucnao nartiva igual ao var_dump que
  // retoprna se é uma varaivel booleana true ou não false
  // var dump  aq so serve pra imprimir o valor na tela,
  // pq is bool n mostra na tela do browser essa operação
  var_dump(is_bool($mostrar)); // bool(true)
  // retorna false pois numero é um inteiro n um booleano
  var_dump(is_bool($numero)); // bool(false)
?>