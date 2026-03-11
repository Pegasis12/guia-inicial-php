<?php 
  // criar cookie
  $nome = "meu_cookie"; // nome chave
  $valor = "conteudo_do_meu_cookie";
  $expiracao = 3600; // determina quanto tempo cookie ficara disponivel nesse caso 1 hora de duração
  setcookie($nome, $valor, time() + $expiracao); // funcao que seta o cookie, recebe argumentos de nome, valor,
  //conteudo e duracao
  // time serve so pra pegar o momento atual e soma mais o tempo de expiração q da o momento exato  de termino de expiração
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
  <h3>Criando cookie</h3>
  <p>Cookie criado com sucesso</p>
</body>
</html>