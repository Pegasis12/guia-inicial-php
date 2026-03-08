<?php 
  // vamos simular uma mensagem de erro.
  // se a varaivel erro tiver conteudo dentro dela, devera ser
  // apresentado a mensagem de erro.
  // caso contrario, se a mensagem de erro estiver vazia, devera 
  // aparecer a mensagem sucesso
 
  $mensagem_erro  = "";

  // resolução
  $css = "";
  $mensagem = "";
  // empty verifica se a varaivel e vazia, poderia usar trim dentro de empty pra limpar espaco
  // pois caso tenha espacos dentro de msgerro ele n faz nada
  if(!empty($mensagem_erro)){
    $mensagem = $mensagem_erro;
    $css = "erro";
  } else {
    $mensagem = "SUCESSO";
    $css = "sucesso";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 6</title>
    <style>
    .sucesso{
      color: white;
      background-color: darkgreen;
    }

    .erro{
      color: white;
      background-color: darkred;
    }
  </style>
</head>
<body>
  <div class="<?= $css ?>"><?= $mensagem ?></div>
</body>
</html>