<?php
    // CICLO FOREACH

    // No cenario de PHP embutido em HTML
    $nomes = ["joao", "ana", "carlos", "francisco", "maria"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- segue o mesmo padrao de anri a tah php, escrever o ciclo depois : -->
  <!-- a instrucao logo abaixo e depois o fechamento cm ; -->
  <div>
    <?php foreach ($nomes as $nome): ?>
      <h2><?php echo $nome ?></h2>
    <?php endforeach; ?>
  </div>

</body>

</html>
