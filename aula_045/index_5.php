<?php 
  // parametros de uma funcao

  // como forçar os strict types
  declare(strict_types=1);

  // agora segue a risca o strict type, fazendo com que o retorno  da funcao por exemplo
  // de string n funcione caso retorne uma multplicacao de numeros
  function multiplicar($a, $b): int|float{
    return $a * $b;
  }

  // se colocar numero com casas decimais e o retorno for forcado cm int do strict type
  // vai da erro, pra isso podemos colocar o retorno tbm pra retornar int e float com
  // int|float, dessa forma n da erro
  echo multiplicar(10.2,2); 
?>