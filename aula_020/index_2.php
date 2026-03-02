<?php 
  // NULL
  $valor = null;
  // se valor for null ele retorna é nulo
  var_dump(is_null($valor)); // bool(true)
  echo '<br>';

  // is null so retorna true se for exatamente null o dado atribuido
  if(is_null($valor)){
    echo "É nulo";
  }

  echo '<br>';

  // empty pergunta se esta vazio ou é nulo, retorna true caso seja  0, false, "0, "", [] - diferente do is_null que precisa ser exatamente null pra retornar true
  if(empty($valor)){
    echo 'É nulo ou vazio';
  }
?>