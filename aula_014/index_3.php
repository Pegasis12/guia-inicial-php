<?php
  // podemos definir o nome de uma variavel a partir do valor de outra
  $original = "nome";
  //$$original faz referencia ao seu atributo, e seu atributo passa a receber o novo valor
  //no caso seu valor e nome que recebe valor final, como se fosse $nome = "valor final"
  $$original = "valor final";
  echo $nome; //valor final
?>