<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1>HTML</h1>

  <!-- posso ter php dentro do html tbm so abrir -->
  <?php 
    echo '<h1>PHP rodando no Html</h1>';
  ?>

  <!-- < ?= "" ?> é como se fosse o echo do php resumido sendopassado dentro do p de html -->
  <p><?= 'PHP ecrito dentro do p em HTML' ?></p>
  
  <!-- ate mesmo em div -->
   <div>
    <?php 
      // semelhante ao echo o print
      print "Olá Mundo! Escrito dentro de DIV em um bloco PHP com print";
    ?>
   </div>
</body>
</html>