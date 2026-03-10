<?php 
  session_start();
  // lembrando unset, é uma funcao nativa do php que destroi ou remove uma variavel
  // no caso destruimos apelido da sessão
  unset($_SESSION["apelido"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php require_once("nav.php")?>

  <hr>
  <h2>Valor de "apelido" removido da sessão</h2>
</body>
</html>