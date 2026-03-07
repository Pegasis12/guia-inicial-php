<?php 
  // Operadores logicos

  // &&   ||   !   and   or
  
  // estes operadores servem para combinar varias condições
  // na analise de valores. Podemos usalos para criar um conjunto
  // de condições mais complexas.

  // && -  vai devolver true se todas as condições forem verdadeiras
  $x = true;
  $y = true;
  var_dump($x && $y); // bool(true)

  $x = 20;
  $y = 10;
  var_dump($x > 10 && $y < 20); // bool(true)
  var_dump($x > 100 && $y < 20); // bool(true)

  // || - vai devolver true se, pelo menos, uma das condicoes for verdadeira
  $x = false;
  $y = true;
  var_dump($x || $y); // bool(true) - porque $y e verdadeiro

  var_dump(10 > 1 || 10 > 200); // bool(true) - porque 10 > 1
  var_dump(2 > 1 || 3 > 2); // bool(false) - nenhuma das condicoes e verdadeira

  // ! - operador de negação

  $nome = "João";
  var_dump(!is_string($nome)); // bool(false) - e uma string, porem ele vai negar, dando false

  // o operador "and" e "or" tem um comportamento semelhante ao && e || 
  // com ligeiras diferencas que nao vamos explorar no momento
  // prefrencialmente deve ser usado && ||

  // O php implementa uma filosofia de short circuit evaluation
  // Exemplo
  var_dump(true || false);

  // vai avaliar o primeiro true 
  // quando encontrar o operador ||, verifica que ja tem informacao
  // suficiente para definir que a condicao e veradeira, logo, 
  // nao analisa o resto das condicoes
?>  