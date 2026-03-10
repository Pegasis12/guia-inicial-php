<?php 
  // parametros de uma funcao

  // o PHP 8 veio introduzir a possibilidade de alterar a ORDEM dos argumentos
  // quando chamamos uma funcao

  // E um conceito designado por named arguemnts

  function apresentar($a, $b, $c = 100){
    return "$a | $b | $c";
  }

  echo apresentar(10,20) . "<br>"; // 10 | 20 | 100
  echo apresentar(10,20,30) . "<br>"; // 10 | 20 | 30
  echo apresentar(c: 1, b: 2 , a: 3) . "<br>"; // 3 | 2 | 1

  // se quisermos misturar conceitos, os valores nao nomeados devem vir sempre primeiro
  // exemplo: 
  echo apresentar(10, c: 1, b: 200); // 10 | 200 | 1
?>