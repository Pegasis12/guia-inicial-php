<?php 
  // STRINGS

  //Outras duas formas de definir strings (menos usadas) são:

  // Haredoc
  // lembrando que podemos misturar HTML, passando um paragrago p em cada frase, dessa forma ele quebra linha aé no echo $texto1
  $texto1 = <<<TEXT
  frase 1
  frase 2
  frase 3
  TEXT;

  echo $texto1; //as linhas vão aparecer sem quebra frase 1 frase 2 frase 3
  echo '<br>';
  echo nl2br($texto1); // as linhas vão aparecer com quebras, nl2br() funcao nativa que quebra a linha corretamente na posição da quebra na declaracao
  // frase 1
  // frase 2
  // frase 3
  echo '<br>';

  // Nowdoc unica diferenca a aspas simples no text
  $texto2 = <<<'TEXT'
  frase 1
  frase 2
  frase 3
  TEXT;

  echo nl2br($texto2);

  // muito pouco comum se usar isso
?>