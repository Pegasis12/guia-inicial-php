<?php 
  // introducao condicionais if else if else

  // estamos prestes a concluir a fase introdutoria da linguagem e que nos vai permitir
  // efetuar pequenos projetos

  // um script de PHP pode ser constituido por declaracoes, chamada de funcoes, loops (que ainda nao falamos
  // introducoes condicionais e muito mais

  // uma instrucao condicional permite agrupar um conjunto de declaracoes e controlar
  // a execucao do fluxo da aplicacao
  // a estrutura condicional if É UMA DAS MAIS USADAS NESTE CONTEXTO

  // if(condicao){
  //   executar o codigo dentro do bloco
  // }

  $valor = 10;
  if($valor  == 10){
    echo "OK!";
  }

  // se a condicao falhar é falsa, o codigo de bloco nao vai ser executado
  // podemos usar o else para criar uma alternativa
  if($valor > 10){
    echo "Valor é maior que 10";
  } else {
    echo "valor é igual ou inferior a 10";
  }

  // se quisermos adicionar mais condicoes alternativas, usamos o else if ou elseif funcionam da mesma forma
  if($valor > 100){
    // ...
  } elseif($valor > 50){
    // ...
  } elseif($valor > 10){
    // ...
  } elseif($valor > 5){
    // ...
  } else {
    // ...
  }

  // tambem é possivel usar IF dentro do IF as vezes que quisermos
  if($valor > 5){

    if($valor == 10){
      // ...
    } else {
      // ...
    }

  } else {
      // ...
  }
?> 