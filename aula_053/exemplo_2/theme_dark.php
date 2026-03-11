<?php 
  // diferente de index, argumentos na propria funcao sem depender de
  // criar uma varaivel, pois são nomes mais curtos de se escrever
  setcookie("theme", "dark", time() + 3600); // duracao de uma hroa
  header("Location: index.php"); // header faz um redirecionamento local pra index.php
?>