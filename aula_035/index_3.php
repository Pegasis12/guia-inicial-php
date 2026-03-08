<?php 
  // oderne por ordem alfabetica os produtos do 
  // e array apresneta os dados numa ul
 

  $produtos = ['laranja', 'arroz', 'batata', 'feijão', 'castanha'];
  sort($produtos); // sort coloca o array em ordem alfabetica sem necessidade de criar um novo array
  echo "<pre>";
  print_r($produtos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 3</title>
</head>
<body>
  <ul>
    <li><?= $produtos[0] ?></li>
    <li><?= $produtos[2] ?></li>
    <li><?= $produtos[3] ?></li>
    <li><?= $produtos[4] ?></li>
  </ul>
</body>
</html>