<?php 
  // usando como ponto de partida o array de produtos,
  // inverta a ordem dos mesmos, acrescente no final
  // "maca" e "pera" e apresenta numa ul

  $produtos = ['arroz', 'batata', 'laranja'];
  $produtos = array_reverse($produtos); // funcao nativa de array que faz a array reverse, precisa ser atribuido a alguma varaivel, sozinho n retorna a array alterada
  array_push($produtos, "maçã", "pera"); // add mais itens ao final da array
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 2</title>
</head>
<body>
  <ul>
    <li><?= $produtos[0] ?></li>
    <li><?= $produtos[1] ?></li>
    <li><?= $produtos[2] ?></li>
    <li><?= $produtos[3] ?></li>
    <li><?= $produtos[4] ?></li>
  </ul>
</body>
</html>