<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <style>
    .cor-texto{
      color: red;
    }
  </style>
<body>
  <h1>O meu nome é João</h1>

  <!-- misturamos o php com html e definimos uma variavel nome -->
  <?php
    $nome = "João Ribeiro";
  ?>

  <!-- imprimimos o nome da variavel criada no 
  php acima com echo nome -->
  <h3>O meu nome é <?php echo $nome?>!</h3>
  <!-- imprimimos a mesma variavel porem com echo resumido sem
  necessidade de escrever php -->
  <h3>O meu nome é <?= $nome?>!</h3>

  <!-- escrevendo HTML a partir de um php -->
  <?php
    echo "<p>Vamos criar um paragrafo HTML dentro do PHP!</p>";
    // lembrando de usar aspas simples pra imprimir strings dentro do php e tbm classes dentro de tags
    echo '<p class="cor-texto">Paragrafo dentro do HTML usando uma classe css feita no HTML</p>';
  ?>
</body>
</html>