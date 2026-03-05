<?php 
  // Operadores de atribuicao
  // = += -= *= /= %= **=

  $x = 100; // atribui valor da direita a varaivel da esquerda
  $a = $b = $c = 200;
  $c = ($y = 10) * 10; // 100 - não e recomendavel este tipo de escrita

  $x = 10;
  $x = $x * 2; // 20

  $x = 1;
  $x += 4; // 5 mesma coisa que $x = $x + 4;
  echo $x . "<br>"; // 5

  $x = 45;
  $x -= 5; // 40 mesma coisa que $x = $x - 5;
  echo $x . "<br>"; // 40

  $x = 10;
  $x *= 2; // 20 mesma coisa que $x = $x * 2;
  echo $x . "<br>"; // 20

  $x = 100;
  $x /= 4; // 25 mesma coisa que $x = $x / 4;
  echo $x . "<br>"; // 25

  $x = 100;
  $x %= 60; // 40 mesma coisa que $x = $x / 60;
  echo $x . "<br>"; // 40

  $x = 9;
  $x **= 2; // 81 mesma coisa que $x = $x ** 2; (9*9) = 81
  echo $x . "<br>"; // 81
  
  // cuidado usar estes operadores em varaiveis que não
  // estão definidas, vai ter warning do php
  $valor += 100; // não existe valor, por isso da um warning
?>  