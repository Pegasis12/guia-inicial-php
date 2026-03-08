<?php 
  // usando como ponto de partida o array de produtos,
  // apresenta no HTML uma unordered List (ul) contendo
  // todos os produtos do array

  $produtos = ['arroz', 'batata', 'laranja'];

  // poderia ser feito assimd entro do html
  //   echo <<<TEXT
  //   <ul>
  //     <li>$produtos[0]</li>
  //     <li>$produtos[1]</li>
  //     <li>$produtos[2]</li>
  //   </ul>
  //   TEXT;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 1</title>
</head>
<body>
  <ul>
    <li><?= $produtos[0] ?></li>
    <li><?= $produtos[1] ?></li>
    <li><?= $produtos[2] ?></li>
  </ul>
</body>
</html>