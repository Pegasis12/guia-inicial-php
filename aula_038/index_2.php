<?php 
  // Operador Ternario

  $erro = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .erro{
      background: red;
      color: white;
    }
  </style>
</head>
<body>
    <!-- se a varaivel erro for true ele recebe a classe erro, se n recebe nada -->
    <div class="<?= $erro ? "erro" : "" ?>">RESULTADO</div>
</body>
</html>