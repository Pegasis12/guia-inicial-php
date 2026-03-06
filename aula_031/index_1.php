<?php 
  // Operadores de incremento e descremento
  // ++ --

  // Permite incrementar ou decrementar um valor em uma unidade
  // pode ser usado como pre-incremento ou pos-incremento

  $x = 10;

  // pos incremento e pos decremento
  $x++;
  $x--;

  // pre incremento e pre decremento
  ++$x;
  --$x;

  // como funciona os resultados?
  $x = 100;
  echo $x++; // vai aprensetar o valor 100 e passar a varaivel para 101
  echo $x--; // vai apresentar o valor 101 e passar a varaivel para 100

  echo ++$x; // vai passar a variavel para 101 e apresentar 101
  echo --$x; // vai passar a varaivel para 100 e apresentar 100

  // este operadores devem ser usados apenas nos valores numericos
?>  