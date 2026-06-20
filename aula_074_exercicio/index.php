<?php
  $erro = "";
  $sucesso = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["text"])) {
      $erro = "Campo de texto vazio!";
    } else {
      $valor = $_POST["text"];
      if (is_numeric($valor)) {
        $file = fopen("dados_numericos.txt", "a");
        fputs($file, $valor . PHP_EOL);
        fclose($file);
        $sucesso = "Valor númerico guardado com sucesso";
      } else if (is_string($valor)) {
        $file = fopen("dados_string.txt", "a");
        fputs($file, $valor . PHP_EOL);
        fclose($file);
        $sucesso = "Valor string guardado com sucesso";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Nível 1 - Exercício 04</title>
</head>

<body>

  <form action="index.php" method="post">
    <label style="display: block;" for="text">Texto</label>
    <input type="text" id="text" name="text">
    <input type="submit" value="Enviar">
  </form>
  
  <div>
    <?= !empty($erro) ? $erro : $sucesso ?>
  </div>
</body>

</html>