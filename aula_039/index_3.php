<?php 
  // CICLOS
  $valor1 = 1;
  $valor2 = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <!-- while -->
    <!-- como se fosse o if no html com php -->
    <?php while($valor1 <= 10) : ?>
      <h3>Valor = <?= $valor1++ ?></h3>
    <?php endwhile; ?>

    <hr>

    <!-- do while no html, abro a tag, n fecho chaves, coloco o bloco a ser
     executado, depois abro outra tag  fechando bloco do do, e while cm sua condicao -->
    <?php do { ?>
      <h3>Valor = <?= $valor2++ ?></h3>
    <?php } while($valor2 <= 10)?>
</body>
</html>