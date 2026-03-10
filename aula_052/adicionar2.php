<?php 
  // trabalhando coms essão sempre chamamos o sessinstart
  session_name("minha_sessao"); // defini o nome da sessão
  session_set_cookie_params(60*3); // defini o numero de segundos q o cookie vai viver
  session_start();
  // chamamos a super global session atribuindo nome = pablo
  // se na sessão existir nome ele escreve oq definimos agora
  // se n existir ele cria na sessão e add na sessão
  $_SESSION["apelido"] = "Escobar";
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
  <h2>Valor de "apelido" adicionado a sessão</h2>
</body>
</html>