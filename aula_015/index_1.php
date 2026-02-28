<?php 
  //constantes
  //ao contrario das variaveis, as constantes tem valores que nao podem
  //ser alterados

  //definir uma constante
  define('nome', 'valor');
  echo nome; //imprimi valor

  // por questoes de boa pratica as constantes são definidas com letra maiuscula
  define('TAXA_FIXA', 10);
  //aqui apenas definimos uma constante pra receber um booleano
  define('APRESENTAR_DADOS', false);
  echo TAXA_FIXA;

  //podemos usar o valor de uma constante em operacoes e tudo mais, assim como no js
  //so n podemos modificar o valor dela em si
  $preco_inicial = 500;
  //lembrando cosntantes n preciso do cifrão
  $preco_final = $preco_inicial + TAXA_FIXA;
  echo $preco_final;

  //novamente, NÃO PODEMOS ALTERAR UM VALOR DE UMA COSNTANTE
  //TAXA_FIXA = 100; //ERRO
?>