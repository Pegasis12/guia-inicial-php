<?php 
  // vejamos como adicionar condicoes do PHP dentro do HTML
  $valor = 10;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- se valor for igual a 10 dentro do escopo d php, o proximo codigo depois do if :
  <p>VALOR E IGUAL A 10!</p> -->
  <?php if ($valor == 10) : ?>
    <p>VALOR E IGUAL A 10!</p>
  <!-- se não for igual a 10 else : ele dropa  <p>VALOR E diferente de 10!</p> -->
  <?php else : ?>
    <p>VALOR E diferente de 10!</p>
  <!-- sempre fechar a execucao do if com endif; -->
  <?php endif; ?>

  <!-- e com o elseif só funciona elseif junto separado n rola -->
   <?php if ($valor > 100): ?>
    <p>valor é maior que 100!</p>
  <?php elseif ($valor > 50): ?>
    <p>valor é maior que 50!</p>
  <?php elseif ($valor > 10): ?>
    <p>valor é maior que 10!</p>
  <?php else :?>
    <p>valor é diferente de todas as outras condições!</p>
  <?php endif; ?>
</body>
</html>