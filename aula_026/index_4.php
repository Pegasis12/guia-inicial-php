<?php 
  echo '<pre>';
  // 1. Define $a e $b com valor igual a 20
  // 2. Define $c e $d com valor igual a 5
  // 3. Apresente o resultado da soma de $a adicionado a $b
  // e depois dividindo esse resultado pela adicao de $c e $d

  // resultado: 4
  $a = $b = 20;
  $c = $d = 5;
  // forma tradicional
  // $ab = $a + $b;
  // $cd = $c + $d;
  // $resultado  = $ab / $cd;
  // forma resumida
  $resultado = (($a + $b) / ($c + $d));
  echo $resultado;
?>