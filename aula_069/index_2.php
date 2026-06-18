<?php 
  /*
  Neste módulo introdutório não iremos explorar em profundidade
  alguns conceitos mais avançados de gestão de erros.
  No entanto, vamos aos conceitos fundamentais.

  Quando identificamos um espaço do nosso código que pode
  originar um erro dinamicamente, podemos usar a estrutura
  try... catch... finally...

  A estrutura é a seguinte:

  try {
      código que pretendemos executar de forma segura
  }
  catch (Throwable $e){
      código que será executado no caso de acontecer um erro
  }
  finally {
      código que será sempre executado, quer tudo corra bem
      quer aconteça um erro
  }

  Colocamos o código que pretendemos executar sem erros destrutivos
  dentro do bloco try.

  se algum erro ocrrer, sera automaticamente guardado a mensagem de erro no 
  Exception $e e é executado o codigo dentro do bloco catch.

  adicionalmente, podemos colcoar um bloco finally para codigo que 
  sera sempre executado a seguir a um try ou catch.
  */

  $valor1 = 10;
  $valor2 = 0;

  // se n tivesse o try e fizemos essa expressao direta, o erro iria acotnecer
  // e n iria rodar o restante do codigo, cm try, ele pode dar erro, mas a execução continua
  // $resultado = $valor1 / $valor2; // Unscaught DivisionByZeroError: Divbision by zero
  try {
    $resultado = $valor1 / $valor2;
    echo $resultado;
  } catch (Throwable $e){
    echo "ERRO: " . $e->getMessage();
  } finally {
    echo "<br>Este codigo sera sempre executado.</br>";
  }

  echo "fim";

  // iremos perceber melhor quando usar este tipo de estrutura
  // nos exemplos e exercicios que remos reservados para o final
  // do modulo
?>