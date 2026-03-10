<?php 
  // Escopo de varaiveis

  /*
    neste caso, a variavel $nome tera duas versoes
    uma global que existe ao longo do scrip
    outra local que pe criada e termina dentro do bloco da funcao
  */

  $nome = "Pablo"; // global

  function dados(){
    $nome = "pablin";
  }

  dados();

  echo $nome; // pablo
?>