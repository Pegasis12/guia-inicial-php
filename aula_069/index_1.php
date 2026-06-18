<?php 
  // TRATAMENTO DE ERROS

  /*
  No vídeo anterior vimos como ativar e controlar
  a forma como o PHP apresenta (ou não) os erros dos
  nossos scripts. No entanto, o desafio está em executar
  o nosso código de forma a que, sempre que um potencial
  erro ocorra, a nossa aplicação seja capaz de o capturar
  e seguir um caminho alternativo.

  É sobre isso que iremos falar neste vídeo.

  Vamos começar por tratamento de exceções.
  É um mecanismo que serve para alterar o fluxo normal
  da execução do código, se ocorrer um erro especificado (excepcional).
  Esta condição é chamada de exceção.
  */

  function adicionar($a, $b){
    if(!is_numeric($a) || !is_numeric($b)){
      // LANCAR UMA NOVA EXCESSSÃO
      throw new Exception("Pelo menos um dos valores não é numérico!");
    }
    return $a + $b;
  }

  // echo adicionar("João", 7);

  // agora usando a estrutura try catch para impedir o fim da execução.
  try{
    // tenta executa isso
    echo adicionar("Pablo", 10);
    // se acontecer um erro apresenta o erro mas n para a execução
  } catch (Exception $erro){
    echo $erro->getMessage();
  }

  echo "<br>Fim do Script.";

  // o que aconteceu neste script
?>