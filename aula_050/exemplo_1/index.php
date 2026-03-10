<?php 
  // todos os scripts devem ter o inicio de sessão
  // antes de quaLQuer output do PHP
  // No caso, session_star so funciona se for o primeiro codigo php
  session_start();

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