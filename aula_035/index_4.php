<?php 
  // contrua a logica condicional que permita apresentar o paragrafo
  // correspondente ao valor da variavel nome
 
  $nome = "ana";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 4</title>
</head>
<body>

  <?php if ($nome == "joao") : ?>
    <p>O nome é joao</p>
  <?php elseif ($nome == "ana") : ?>
    <p>O nome é ana</p>
  <?php elseif ($nome == "carlos") : ?>
    <p>O nome é carlos</p>
  <?php else : ?>
    <p>O nome é desconhecido</p>
  <?php endif; ?>

</body>
</html>