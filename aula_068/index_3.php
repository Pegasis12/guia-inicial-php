<?php 
  // A funcao error_log() permite escrever o que qusiermos no registro de logs
  // de filesystem do PHP

  // O PHP tem normalmente ativo o sistema de resgitro de logs.
  // se quisermos perveber onde esse registro se encontra, podemos
  // executar o phpinfo() e procurar a propriedade error_log

  phpinfo();

  // O php vai escrevendo eventos de erro nesse ficheiro.
  // Se quisermos escrever o teu proprio registro, podemos fazer

  error_log("Aconteceu um erro.");

  // tradicionalmente, o desenvolvimento de aplicações
  // vai querer usar um pacote externo que segue normas
  // para o registro de logs. Um dos mais conhecidos é o monolog. Iremos
  // no modulo mais avancado ver como adicionar este pacote ao nosso sistema
  // com o composer e como podemos usa_lo nos nossos projetos.

  // Existem outras funcoes que permitem configurar erros.
  // por agora ficamos com as fundamentais.

  // O importante agora é perceber como é que podemos controlar os
  // erros e evitar que a nossa aplicação termine por causa de um erro
?>