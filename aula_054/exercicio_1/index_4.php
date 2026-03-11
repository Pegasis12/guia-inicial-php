<?php 
  // podemos criar pastas de forma recursiva
  // como não vamos usar o segundo argumento, usamos named arguments
  // para definir o valor do terceiro parametro
  mkdir(__DIR__ . "/aaa/bbb", recursive:true); // cria a pasta aaa e bbb dentro da mesma
  // sem o recursive true, n iria criar pasta dentro de pasta
?>