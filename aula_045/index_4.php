<?php 
  // parametros de uma funcao

  // O php vai sempre tentar determinar o data type dos parametros e do return
  // podemos reforcar o tipo de valores que vao ser retornados da seguinte forma

  // forcando um retorno int
  function adicionar($a, $b): int {
    return $a + $b;
  }

  echo adicionar(10,20) . "<br>";

  // se for alterado o data type para string
  function multiplicar($a, $b): string {
    return $a * $b;
  }

  echo multiplicar(10,2); // vai apresetar o resultado normalmente. Porque?

  // existe um mecanismo no PHP designado por strict types.
  // se esse mecanismo nao estiver ativo, o PHP vai tentar sempre fazer
  // a conversao implicita dos valroes
?>