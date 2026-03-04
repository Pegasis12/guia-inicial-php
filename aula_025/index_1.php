<?php 
  // Operadores

  // UM OPERADOR E ALGO QUE RECEBE UM OU MAIS VALORES (EXPRESSÕES)
  // E O QUE DEVOLVE OUTRO VALOR
  
  echo '<pre>';
  echo 10 + 20; // OPERADOR MATEMATICO DE ADIÇÃO. RESULTADO 30

  // OS OPERADORES PODEM SER AGRUPADOS DA SEGUINTE FORMA:

  // So envolve um unico valor -> operador unario
  // envolve dois valores -> operador binario (a maior parte dos operadores)
  // envolve tres valores -> operador ternario

  // operadores matematicos
  $x = 10;
  $y = 2;
  var_dump($x + $y); // int(12) - adição
  var_dump($x - $y); // int(9) - subtração
  var_dump($x * $y); // int(20) - multiplicação
  var_dump($x / $y); // int(5) - divisão
  var_dump($x % $y); // int(0) - resto da divisão
  var_dump($x ** $y); // int(100) - potencia - 10 elevado a 2

  var_dump(-10); // int(-10)
  var_dump("10"); // string(2)"10"
  var_dump(+"10"); // int(10)

  var_dump(10 / 2); // int(5)
  var_dump(10 / 3); // float(3.3333)
  var_dump(10 / 2.0); //float(5)

  // var_dump(10 / 0); //Erro! Divisão por zero
  // divisao por 0 no php sempre da erro
  // para evitar o erro:
  // fddiv recebe o primeiro argumento o dividendo e o segundo o divisor
  var_dump(fdiv(10,0));

  // cuidado com o modulos
  var_dump(10 % 2); // int(0)
  var_dump(10 % 3); // int(1)
  var_dump(10 % 6); // int(4)
  var_dump(10.5 % 3.2); // Deprecated !!!! da erro, usamos o fmod ou fdiv para essa operação com casas decimais
  var_dump(fmod(10.5, 3.2)); //float(0.89999)
  // os valores envolvidos na operacao sao sempre modificados para int
  // para valores float sao removidas as casas decimais passando para int

?>  