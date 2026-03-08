<?php 
  // um empresa tem varias lojas, cada uma com um endereço de email
  // a variavel $cidade indica que dados de email deverao ser apresentados
  // Construa a logica condional e de apresentacao do email correspondente
  // quando é alterado o valor da cidade
 
  $lojas = [
    'lisboa' => 'lisboa@gmail.com',
    'porto' => 'porto@gmail.com',
    'coimbra' => 'coimbra@gmail.com'
  ];

  $cidade = 'lisboa';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 5</title>
</head>
<body>
  <!-- key_exists verifica se existe a key cidade dentro de lojas -->
  <?php if(key_exists($cidade, $lojas)) :?>
    <h3><?= $cidade ?></h3>
    <p><?= $lojas[$cidade] ?></p>
  <?php else :?>
    <p>Não existe nenhuma loja na cidade indicada</p>
  <?php endif; ?>
</body>
</html>