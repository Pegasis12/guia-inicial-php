<?php 

  // Apresente a frase abaixo 10 vezes, com uma opacidade cada vez MENOR
  // até ser quase invisivel

  // É um exercicio de utilizacao de um ciclo para repetir um texto
  // e ao mesmo tempo alterar o valor da opacidade do estilo de letra

  // deve usar o atributo style para o efeito visual

  $frase = "Esta frase vai aparecer com diferentes opacidades"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex5</title>
</head>
<body>
  <!-- aproveitamos o ciclo, de decremento pra trabalhar tbm na opacidade
   pois a opacidade total é 1, e acada decremento ele divide o de
   $i valor por 10 na primeira execuxao 10/10 = 1, na segunda 9/10 = 0.9
   e assim até decrementar tudo fazendo o efeito de diminuir a opacidade aos
   poucos -->
  <?php for($i = 10; $i >= 0; $i--) : ?>
    <p style="opacity: <?= $i / 10 ?>"><?= $frase ?></p>
  <?php endfor; ?>
</body>
</html>