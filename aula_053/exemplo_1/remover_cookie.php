<?php 
  // remover cookie
  // apenas setei o cookie com valor vazio e setando o 
  // time pra ser encerrado imediatamente pois ja terminopu a 1s atras
  $nome = "meu_cookie";
  setcookie($nome, "", time() - 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php  require_once("nav.php")?>

  <h3>Removendo cookie</h3>
  <hr>
  <p>cookie removido</p>

</body>
</html>