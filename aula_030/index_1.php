<?php 
  // Operadores de controle de erro

  // Existem varias formas de contornar erros no PHP
  // Este operador, quando aplicado a uma expressao que vai gerar um erro
  // permite que esse erro seja ignorado
  
  $ficheiro = file('teste123.txt');

  // este codigo vai gerar um erro
  // se adicionarmos o operador de controle de erro,
  // a mensagem do aviso vai desaparecer, sendo a intrucao ignorada

  $ficheiro = @file('teste123.txt');

  echo "fim";

  // Não e aconselhavel usar este operador, exceto em situações muito
  // especificas, uma vez que a supressao da mensagem de erro pode impedir que 
  // encontremos um erro no nosso codigo
?>  