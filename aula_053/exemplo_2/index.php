<?php 
  // neste exemplo muito simples, vamos usar um cookie
  // para definir o tema claro ou escuro do nosso site

  //verifica se existe um cookie com tema
  // se existir o cookie ele assume o valor dele se n light
  $theme = !empty($_COOKIE["theme"]) ? $_COOKIE["theme"] : "light";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      margin: 0;
      padding: 0;
    }
    .light{
      background: white;
      color: black;
    }
    .dark{
      background: black;
      color: white;
    }
    a{
      color: red;
    }
  </style>
</head>
<body class="<?= $theme ?>">

  <a href="theme_dark.php">Dark Mode</a> | <a href="theme_light.php">Light Mode</a>
  <h1>Exemplo simples de tema com cookie</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
  
</body>
</html>