<?php 
  // ARRAYS

  // vimos arrays com indices numericos
  // ele tambem podem ser arrays associativos
  // tem indices alfonumericos
  // é tpo um objeto
  $empresa = [
    'ceo' => "João",
    'administrador' => "Pablo",
    'executivo' => "carlos",
    'contabilista' => "Pedro"
  ];

  echo '<pre>';
  print_R($empresa);
  echo '</pre>';

  // para apresentar o valor apssamos o array com sua chave index
  echo $empresa['ceo'];

  // e podemos adicionar mais valores pus
  $empresa['operario'] = "Paulo"; //add um index operario q recebe paulo, se tivess atribuido no mesmo index ja existente iria sobrescrever um indice q ja tem
  echo '<pre>';
  print_R($empresa);
  echo '</pre>';
?>