<?php 
  // STRINGS

  // um aspecto importante nas strings: o PHP contem um vasto conjunto de 
  // funcoes para efetuar operações com strings
  // vejamos apenas alguns exemplos

  $frase = "Lorem ipsum dolor sit amet";

  // apresentar numero de caracteres de uma string
  echo strlen($frase) . '<br>'; // funcao nativa q mostra a quantidade de caracters dentro da string espaco tbm conta

  // transforma todas as letras em maiusculas
  echo strtoupper($frase) . '<br>'; // funcao nativa que transforma o texto em maiuculo

  // apresenta apenas parte da frase
  echo substr($frase, 0, 10) . '<br>'; // funcao nativa que pega recebe o argumento q recebe 3 argumentos onde sera feito, de onde começa e onde termina

  // verifica se uma palavra existe dentro da string - caso encontre retorna 1 - não encontra retorna nada - retorna true ou false
  echo str_contains($frase, 'dolor'); // funcao nativa que recebe dois argumentos o primeiro onse vai verificar, o segundo oq é pra verificar dentro do primeiro

  // Existem varias dezenas de funcoes para string 
  // Não se preocupe, ao longo do modulo iremos aprender bastante a medida das necessidades
?>