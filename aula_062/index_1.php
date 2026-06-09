<?php 
  // TRATAMENTO DE FORMULARIOS - INTRODUÇÃO   

  // Uma das areas onde o PHP tem uma utilizacao muito grande é no
  // tratamento da submissão de um formulario.
  // Quando tem um formulario escrito em HTML e pretente
  // que os dados preenchidos seham tratados do lado do servidor
  // para, eventualmente, serem guardados numa base de dados,
  // é aqui que o PHP entra no sistema.

  // Nesta aula vamos fazer uma introdução ao tratameno de FORMULARIOS
  // com o PHP e a super global $_POST.

  // vamos analisar o seguinte formulario de Login
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .wrapper{
      margin: 50px auto;
      width: 300px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input { 
      display: block;
      margin-bottom: 10px;
      padding: 5px;
      width: 100%;
    }

    input[type="submit"]{
      width: 100px !important;
      padding: 10px !important;
      margin: 0px auto;
    }
  </style>
</head>
<body>
  <div class="wrapper">
      <h3>LOGIN</h3>
      <form action="submissao_2.php" method="POST">
        <label for="">Username</label>
        <input type="text" name="text_username">
        <label for="">Password</label>
        <input type="password" name="text_password">
        <input type="submit" value="Entrar">
      </form>
  </div>
</body>
</html>