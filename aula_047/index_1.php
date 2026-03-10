<?php 
  // Include e require

  /*
    Tradicionalmente uma aplicacao de PHP pode conter dezenas de scripts que,
    combinados entre si, permitem executar as operações desejadas.
    até agora vimos scrips isolados.
    podemos separar o codigo entre varios scrips e, no momento de execução,
    "importar" o codigo para o interior da nossa aplicação.

    Existem 4 formas de executar esta tarefa:
      include
      include_once
      require
      require_once
  */

  // -----------------------------------
  // Include
  include 'script.php'; // capcura oq tem no script.php, agora esse index_1 tem acesso a tudo que existe lá, podendo ser executado e tudo mais, como se fosse o import do js
  include 'outro.php'; // o ficheiro não existe, Vai aparecer um aviso
  include 'script.php';

  /*
    principal diferença entre o include e o require:
    include - mostra aviso se o script não existe e permite continuar a execução
    require - mostra um erro se o script não existe e interrompe a execução pois require é um requisito obrigatorio
  */
?> 