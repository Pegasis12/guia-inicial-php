<?php 
  // vamos a um pequeno exercicioi pratico, onde vamos implementar
  // varias materias estudadas até o momento.
  // vamos guardar dentro de um ficheiro de texto
  // a tabuada dos 3 até a multiplicação por 1000
  // 3 x 1 = 3 ... 3 x 1000 = 3000

  for($i = 1; $i <=1000; $i++){
    $operacao = "3 x $i" . " = " . (3 * $i);
    file_put_contents("text.txt", $operacao . PHP_EOL, FILE_APPEND);
  }
?>