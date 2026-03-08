<?php 
  // expressao match
  // iremos falar sobre funcões em breve

  $valor = 50;

  // podemos executar uma funcao caso uma condição seja verdadeira no match
  $resultado = match(true) {
    $valor > 100 => fn1(),
    $valor == 100 => fn2(),
    $valor < 100 => fn3(),
  };
  echo $resultado;

  // mesma coisa que js, functions declaration são elevadas no escopo ate o topo
  // por isso mesmo declaradas aq, cosneguem ser executadas no resultado
  function fn1(){
    return "Valor maior que 100.";
  }

  function fn2(){
    return "Valor igual a 100.";
  }

  function fn3(){
    return "Valor menor que 100.";
  }
?>