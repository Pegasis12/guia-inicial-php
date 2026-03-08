<?php 
  // CICLOS

  // ------------------------------------------
  // DO WHILE

  // A diferença para o cliclo while e que,
  // neste caso, o bloco é executado pelo menos uma vez
  // e só depois é avaliada a condição
  
  // O while so executa caso a condição for verdadeira, caso n seja ele
  // nem entra na repetição, ja o do while ele executa pelo menos uma vez
  // e depois sim verifica a condição

  $valor = 1;
  // se o valor fosse por exemplo 50, ele executaria uma vez, fazendo 3 x 50, ja
  // na segunda repetição iria parar, pois iria bater na condição
  do {
      echo "3 x $valor = " . $valor * 3 . "</br>";
      $valor++;
  } while($valor <= 10);
?>