<?php 
  // Operadores de comparação
  // == === != <> !== <  >  <=  >= <=> ?? ?:

  // sao operadores que permitem comparar valores de expressoes ou varaiveis
  // o resultado dessas comparacoes são, valores boleanos
  // uma comparacao pode ser verdadeira true ou false false
  
  // verifica se os valores são iguais
  var_dump(10 == 20); // bool(false)
  var_dump(5 == 5); // bool(true)
  var_dump('Joao' == 'joao'); // bool(false)
  var_dump('Joao Ribeiro' == 'Joao' . " " . "Ribeiro"); // bool(true)

  var_dump(10 == "10"); //bool(true)
  // acontece uma conversão implicita da string para numero

  // como resolver?
  // vamo comparar o valor e o tipo de dados
  var_dump(10 === "10"); //bool(false) === faz uma compracao mais aprofundada

  var_dump(1 == true); // bool(true)
  var_dump(1 === true); // bool(false)

  // verifica se os valores são diferentes
  var_dump(100 != 20); // bool(true)
  var_dump(5 != 5); // bool(false)
  var_dump(5 != "5"); // bool(false) os valores nao sao diferentes, sao iguais

  var_dump(5 !== "5"); // bool(true) os sao diferentes

  var_dump(20 <> 30); // bool(true) é equivalente aio operador !=

  // IMPORTANTE: no PHP 8, temos o seguinte código:
  var_dump(0 == 'joao'); // o 0 é convertido para uma string var_dump("0" == 'joao');
  // UMA VEZ QUE A STRING "JOAO" NAO PODE SER CONVERTIDA PARA NUMERO, ENTAO O PHP

  // os operadores < > <= e >= sao de facil entendimento
  var_dump(10 > 5); // bool(true)
  var_dump(10 < 5); // bool(false)
  var_dump(10 > 10); // bool(false)
  var_dump(10 >= 10); // bool(true)
  var_dump(10 <= 10); // bool(true)

  // uma nota importante, compara caracter por caracter em ordem alfabetica
  var_dump("joao" >= "sara"); // bool(false)
  var_dump("joao" <= "sara"); // bool(true)

  // spaceship operator (operador nave espacial)
  //<=>
  var_dump(20 <=> 10); // int(1) devolve um caso o da esquerda for maior q o da direita
  var_dump(10 <=> 10); // int(0) devolve 0 caso os dois sejam iguais
  var_dump(10 <=> 20); // int(-1) -1 caso o da direita ser maior q o da esquerda

  // Operadores condicionais ?? ?:

  // operador ternario
  $valor = "Joao";
  echo $valor == "Joao" ? "SIM" : "NÃO";
  // se valor for igual a joao imprmi sim, caso n seja nao

  // null coalescing operator - operador de coalescencia nulo
  $valor = null;
  // se a varivel valor for nula o a recebe ok
  $a = $valor ?? "ok"; // $a = "ok"

  $valor = 10;
  // se a varivel valor for "ok" o a recebe ok, mas não é ent a recebe o valor que é 10
  $a = $valor ?? "ok"; // $a = 10
?>  