<?php 

  // dada as colecao de nomes, devem ser todos apresentados
  // mas a partir de maria (inclusive) devem ser com texto vermelho

  $nomes   = ["joao", "ana", "carlos", "francisco", "maria", "pablo", "pedro"]; 

  // criando uma varaivel css vazia, pra determinado hora receber vermelho
  $css = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex4</title>
  <style>
    .vermelho{
      color: red;
    }
  </style>
</head>
<body>
  <!-- logica simples, se nome é maria, css passa a ser vermelho -->
  <?php foreach($nomes as $nome): ?>
    <?php if($nome == "maria") $css = "vermelho"?>
    <p class = "<?= $css ?>"><?= $nome ?></p>
  <?php endforeach; ?>
</body>
</html>