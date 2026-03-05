<?php 
  echo '<pre>';
  // 1. Define 3 variveis todas com 15 unicades como valor
  // 2. Multiplica a primeira por 5, a segunda por 10 e a terceira por 15
  // 3. Finalmente, adiciona as tres varaiveis somadas

  // Resultado: 450
  $valor1 = $valor2 = $valor3 = 15;

  $valor1 *= 5;
  $valor2 *= 10;
  $valor3 *= 15;

  $resultado = $valor1 + $valor2 + $valor3;

  echo "Resultado: " . $resultado;
?>