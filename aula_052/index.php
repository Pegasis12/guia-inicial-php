<?php 

  // AULA 52, VAMOS APRENDER A MANTER A SESSÃO MESMO QUE FECHE O NAVEGADOR, ATRAVEZ
  // DO COOKIE, PALEM DISSO PODEMOS MANIPULAR ATE O TEMPO DE SESSÃO
  // Obs: sem cookie ele sempre cria sessões novas ao fechar o browser e ao entrar
  // criando arquivos de sessões no servidor e n eliminando eles automaticamnete

  // todos os scripts devem ter o inicio de sessão
  // antes de quaLQuer output do PHP
  // No caso, session_star so funciona se for o primeiro codigo php

  //preciso replicar o sseion name e coopkie em todos os scripts q tem session_start
  session_name("minha_sessao"); // defini o nome da sessão
  session_set_cookie_params(10); // defini o numero de segundos q o cookie vai viver
  session_start();

  // agora mesmo fechando o browser e voltando ele manten os valores da sessão
  // pelo tempo definido

  // o valor de $nome e $apelido vai ser definido tendo
  // em antencao a existencia ou não das varaiveis a super global $_SESSION

  // logica, se não estiver vazio nesta sessão a variavel nome
  // defini o valor de nome que está na sessão, se não, nome = "-"
  $nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-';
  $apelido = !empty($_SESSION['apelido']) ? $_SESSION['apelido'] : '-';
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
    <h2>Exercicio com sessões de PHP</h2>

    <h3>Valor da varaivel "nome":</h3>
    <h1><strong><?= $nome ?></strong></h1>

    <h3>Valor da variavel "apelido":</h3>
    <h1><strong><?= $apelido ?></strong></h1>
</body>
</html>