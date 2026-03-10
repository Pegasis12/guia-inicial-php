<?php 
  // Include e require
 
  /* 
    um exemplo: podemos criar um script que contem funcoes
    importa para este script e chamar essas funcoes
  */

  require_once ('functions.php'); // se eu chamasse posterior as chamadas das funcoes
  // obviamente iria da errado

  echo adicionar(20, 5) . "<br>";
  echo subtrair(20, 5) . "<br>";
  echo multiplicar(20, 5) . "<br>";
  echo dividir(20, 5) . "<br>";
?>