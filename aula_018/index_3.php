<?php 
  // inteiros int
  // podemos transformar variveis fazendo 'cast' para inteiros
  // int ou integer antecedendo uma string numerica transforma a mesma em um inteiro
  $valor_str = "145";
  $valor_int = (int)$valor_str;
  // ou
  $valor_int_1 = (integer)$valor_str;

  echo $valor_int . '<br>';
  echo $valor_int_1 . '<br>';

  // conversoes de string para inteiro
  echo (int)'100'; // 100 inteiro
  echo '<br>';
  echo (int)'25teste'; // 25 pega somente o numero dentro da string e transforma em inteiro retornando somente ele
  echo '<br>';
  echo (int)'teste333'; // retorna 0

  // podemos verificar se a variavel e inteira
  echo '<br>';

  $final = 100;
  var_dump(is_int($final)); // var dump apresenta o resutlado se e true ou false
  // e is int verifica se e ou n inteiro

  // e podemos ainda definir valores inteiros desta forma
  echo '<br>';
  $outro_valor = 1_500_000;
  echo $outro_valor; // 1500000
?>