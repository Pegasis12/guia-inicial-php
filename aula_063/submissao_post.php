<?php 
 // se não houve submissão do formulario, da acesso invalido
  if($_SERVER["REQUEST_METHOD"] != "POST"){
    // die encerra o script e dropa uma mensagem
    die("Acesso invalido!");
  }

  // user (simulacao de informacao em base de dados)
  $users = [
    // aaa
    "joao" => '$2y$10$541nZLM.qW9sEwCoDE4u7ex3MDEMcmwR38XN8vLBZeMbLjduTeY6S',
    // bbb
    "ana" => '$2y$10$d1fHPJ9AafNWJzxLrhgSCOIA0V8ejKgEi9w/b1.w21G9W5nnHkJlS',
    // ccc
    "carlos" => '$2y$10$9KSQq.ujwGOwMmJX7mGQ/erNHDJnzvZT6j7KHHzEw.xkTa1vY4s.O'
  ];

  // vai busca o username e a password
  // isset() verifica se uma variável existe e não é null.
  // trim() remove espaços em branco do início e do fim de uma string.
  $username = isset($_POST["text_username"]) ? trim($_POST["text_username"]) : "";
  $password = isset($_POST["text_password"]) ? trim($_POST["text_password"]) : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Login result</title>
</head>
<body>
  <!-- verifica se existe a chave username dentro de users -->
  <?php if(key_exists($username, $users)) : ?>
    <!-- nativo verifica qual a password e qual hash pertence a ela -->
    <?php if(password_verify($password, $users[$username])):?>
      <h1>LOGIN OK!</h1>
    <?php else: ?>
      <h1>LOGIN INVALIDO!</h1>
    <?php endif; ?>
    
  <?php else : ?>
    <h1>LOGIN INVALIDO!</h1>
  <?php endif; ?>

  <a href="index_1.php">Voltar</a>
</body>
</html>
?>