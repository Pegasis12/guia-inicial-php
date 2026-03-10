<?php 
session_name("minha_sessao"); // defini o nome da sessão
  session_set_cookie_params(60*3); // defini o numero de segundos q o cookie vai viver
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