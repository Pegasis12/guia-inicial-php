<?php 
  // A SIMPLES E COMPLEXA VALIDAÇÃO DE DADOS

  // validar se tem numero de caracteres validos (3 a 20)
  $valor = "Pablo Lucas Santana Queiroz";
  if(strlen($valor) < 3 || strlen($valor) > 20){
    echo "A string tem que ter entre 3 a 20 caracteres";
    echo "<br>";
  }

  // validar se é um email valido
  // filter var funcao nativa do php que contem um conjunto de constantes que
  // permitem identificar qual sistema de validacao sera usado 
  // para validar esse valor
  $email = "plsantana246@gmail.com";
  var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
  echo "<br>";

  $url = "http://www.google.com";
  var_dump(filter_var($url, FILTER_VALIDATE_URL));
  echo "<br>";

  // filter_var retorna o valor, caso seja valido, ou false
  // se o valor não estiver de acordo com a validacao pretendida.

  // validar se o telefone começa com 9 e tem 9 digitos
  var_dump(preg_match("/^9{1}\d{8}$/", "992970682"));
  // 1 = expressao regular confirma o valor analisado
  // 0 = expressao regular nao confirma o valor analisado
  // false = aconteceu um erro

  // veremos mais detalhes sobre expressoes regulares
  // no modulo mais avancado de php

  // a validacao de dados, é uma das areas mais importantes para
  // impedir erros de execucaio dos nosso scripts
?>