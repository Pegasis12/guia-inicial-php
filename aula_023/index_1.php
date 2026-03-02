<?php 
  // ARRAYS MULTIDIMENSIONAIS
  // SÃO ARRAYS  QUE CONTEM OUTROS ARRAYS

  // aq foi feito uma array que contem varias arrays cm dados dentro, pra ter acesso a mesma é ir encadeando como no js
  // se chama array associativa, pois tem chaves alfonumricas
  $lojas = [
      'porto' => [
        'telefone' => '123456',
        'email' => 'porto@gmail.com'
      ],
      'lisboa' => [
        'telefone' => '12256',
        'email' => 'lisboa@gmail.com'
      ],
      'coimbra' => [
        'telefone' => '3456545',
        'email' => 'coimbra@gmail.com'
      ]
  ];

  echo '<pre>';
  print_r($lojas);
  echo '</pre>';

  // apresenta um valor especifico encadeando as chaves index, lembrando se imprmissi apenas $lojas['lisboa']
  // iria da um warning, pois echo n imprmi corretamente os array, sendo ncessario passar print_r($lojas['lisboa'])
  echo $lojas['lisboa']['telefone']; // 12256

  //nos arrays com indices numericos, tambem podemos ter multidimensão
  $notas = [
    [10,20,30],
    [100,200,300],
    [1000,2000,3000]
  ];

  echo '<pre>';
  print_r($notas);
  echo '</pre>';

  echo $notas[2][0]; // 1000 - acessa o array da posicao 2 edepois o dado 0 do array 2 que é 1000
?>