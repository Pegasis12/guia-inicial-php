<?php 
  // Include e require
 
  /* 
    include_once e require_onde efetuam a inclusão do script apenas uma vez.
    se o script foi anteriormente carregado, ja não vai ser mais carregado.
  */

  // executa somente uma vez, as proximas chamadas ele ignora pois
  // once faz essa inclusão apenas uma vez
  include_once "script.php"; 
  include_once "script.php";
  
  // não executa nada tbm, pois include_once da primeira linha ja carregou uma vez
  require_once "script.php";
  require_once "script.php";
?>