<?php 

  // dada as colecao de nomes, 
  // apresente toda a colecao exceto o nome cujo indice = 4 (maria)

  $nomes   = ["joao", "ana", "carlos", "francisco", "maria", "pablo",]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex3</title>
</head>
<body>
  <?php foreach($nomes as $key => $value): ?>
    <?php if($key == 4) continue ?>
    <h3><?= $value ?></h3>
  <?php endforeach; ?>
</body>
</html>