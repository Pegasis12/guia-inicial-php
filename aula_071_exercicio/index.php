<?php 
  // O ficheiro dados.dat é um ficheiro de texto e contém
  // várias linhas com dados de tipos distintos.
  // Imagina que temos que criar um script que vai carregar
  // o ficheiro de dados, analisar cada linha do seu conteúdo
  // e separar em arrays os dados do ficheiro com a seguinte
  // orientação:
  // - Valores numéricos positivos e negativos para
  // o array $numeros_positivos e $numeros_negativos respetivamente;
  // - Se aparecer o valor 0, é neutro e deve ser ignorado.
  // - Valores alfanuméricos indiscriminados para $textos;
  // - Valores alfanuméricos que contêm a palavra 'TESTE'
  // em qualquer posição, devem ir para o array $textos_teste;



  //Valores numéricos positivos e negativos
  $numeros_positivos = [];
  $numeros_negativos = [];
  $textos = [];
  $textos_teste = [];

  // logica

  // abrindo ficheiro, r pra leitura
  $file = fopen("dados.dat", "r");

  while(!feof($file)){
    // pega linha por linha
    $linha = fgets($file);
    if(is_numeric($linha)) {
      if($linha > 0){
        $numeros_positivos[] = $linha;
      } else if($linha < 0){
        $numeros_negativos[] = $linha;
      }
      // não vale fazer mais nada
      continue;
    }

    if(str_contains($linha, "TESTE")){
      $textos_teste[] = $linha;
    } else {
      $textos[] = $linha;
    }
  }
  fclose($file);

  echo "<pre>";
  print_r($numeros_positivos);
  echo "<hr>";
  print_r($numeros_negativos);
  echo "<hr>";
  print_r($textos_teste);
  echo "<hr>";
  print_r($textos);
?>