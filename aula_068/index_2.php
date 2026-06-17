<?php 
  // esta funcao define que erros serao apresentados
  // o parametro pode ser um valor inteiro, ou a respectiva cosntante.

  error_reporting(E_WARNING);
  /*
    1       E_ERROR
    2       E_WARNING
    4       E_PARSE
    8       E_NOTICE
    16      E_CORE_ERROR
    32      E_CORE_WARNING
    64      E_COMPILE_ERROR
    128     E_COMPILE_WARNING
    256     E_USER_ERROR
    512     E_USER_WARNING
    1024    E_USER_NOTICE
    32767   E_ALL
    2048    E_STRICT
    4096    E_RECOVERABLE_ERROR
    8192    E_DEPRECATED
    16384   E_USER_DEPRECATED
  */
  require_once("ficheiro_inexistente.php"); // o erro acontece porem reduzimos o fatal error, passando apenas E_WARNING
  echo "esta frase não ira aparecer.";
  // este ficheiro não existe. Ira gerar um warning e um fatal error.
  // como temos apenas E_WARNING na função, apenas vai aparecer o aviso.
  // Atenção: o erro que acontece logo depois, apesar de não ser apresentado
  // continua a provocar o fim da execução

  // podemos ainda refinar o parametro da funcao passando mais do que 
  // uma cosntante. Por exemplo

  // Desliga todas as mensagens de erro
  error_reporting(0);

  // Apenas erros de runtime
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

  // TODOS OS ERROS
  error_reporting(E_ALL);

  // O mesmo que a funcao anterior
  ini_set("error_reporting", E_ALL);

  // Reporta todos os erros, exceto E_NOTICE
  error_reporting(E_ALL & ~E_NOTICE);

  // Se está em ambiente de desenvolvimento da tua aplicacao
  // e quer que todos os erros sejam  apresentados, podemos 
  // usar o seguinte codigo:
  ini_set("display_errors", 1);
  ini_set("display_startup_errors", 1);
  error_reporting(E_ALL);
  // Todos os erros e avisos serão apresnetados sempre que
  // o teu codigo apresentar um problema
?>