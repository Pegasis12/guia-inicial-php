<?php 
  // construa uma apresentacao em HTML que mostra a tabuada dos 5
  // Exemplo:
  // 5 x 1 = 5
  // 5 x 2 = 10
  // ...
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex1</title>
</head>
<body>
  
  <div>
    <?php for($i = 1; $i <= 10; $i++) :?>
      <h2>5 x <?= $i ?> = <?= $i*5 ?></h2>
    <?php endfor; ?>
  </div>

</body>
</html>