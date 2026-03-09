<?php
    // 1 construa um array com todos os resultados da tabuada dos 327
    // 2 Apresente os dados do array com um ciclo foreach (apenas os valores)

    use LDAP\Result;

    $resultados = [];
    for ($i = 1; $i <= 10; $i++) {
    // array_push($resultados, 327 * $i);
    // ou que e mesma coisa q o push
    $resultados[] = 327 * $i;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex2</title>
</head>
<body>

    <?php foreach ($resultados as $resultado): ?>
      <h3><?= $resultado ?></h3>
    <?php endforeach; ?>

</body>
</html>