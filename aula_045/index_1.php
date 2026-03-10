<?php 
  // parametros de uma funcao

  // podemos passar valores (argumentos) para o interior de uma funcao
  // se essa funcao aceitar parametros
  // parametros são varaiveis iondicadas dentro dos parenteses
  // da funcao e que vao estar disponiveis para serem usadas dentro da funcao

  // argumentos são valores que passamos para o inteiro dessa funcao
  // vejamos um exemplo simples

  function adicionar($a, $b){
    return $a + $b;
  }

  echo adicionar(10, 50);

  // adicionar - nome da funcao
  // $a e $b são paramtros de funcao. Os parametros são separados por virgula.
  // Ao chamar a funcao, o valor 100 e o valor 50 são designados por argumentos
  // o 100 ira ser atribuido ao parametro $a e o 50 ao paramtro $b da funcao
?>