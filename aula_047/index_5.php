<?php 
  // Include e require
 
  /* 
    imagina  cenario onde temos um conjunto de dados consideravel
    e queremos definir isso dentro de um script a parte.
    tambem é possivel seguindo o seguinte exemplo:
  */

  $nomes = require_once ('dados.php'); // Variavel nome recebe oq for retornado
  // de dados.php

  echo "<pre>";
  print_r($nomes); // aq mostramos o retorno doq foi atribuido de dados dentro de $nomes
?>