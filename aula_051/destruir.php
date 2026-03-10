<?php 
  session_start();

  // posso fazer de duas formas

  // remove todas as variveis da sessão
  session_unset();

  //ou

  // destroi a sessão
  session_destroy();

  // esses valores são armazenados no servidor, no laragon por exemplo fica na pasta
  // tmp um arquivo rach de sessão cm as informações de nome e apelido, caso
  // feche o navegador esse ficheiro n tera mais nada, pois vai ser destruido
  // automaticamente criando uma nova sessão do zero
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
  <h2>Todos os valores foram destruidos</h2>
</body>
</html>