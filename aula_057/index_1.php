<?php 
    // CSV  - significa comma separeted values (valores separados por virgula)
    // é um ficheiro com uma estrutura particular que permite ser usado entre
    // aplciacoes para trnaposrte de dados. Excel, libreoffice, google sheets, ...

    // criar um ficheiro CSV
    $file = fopen("dados.csv", "w");

    // header das colunas
    $header = ["Coluna A", "Coluna B", "Coluna C"];
    fputcsv($file, $header); // escreve no ficheiro csv a primeira linha com os dados do header

    for($i = 0; $i <= 100; $i++){
      $linha = [rand(100, 999), rand(100, 999), rand(100, 999)];
      fputcsv($file, $linha); // escreve abaixo da primeira linha mais 100 linhas cm 3 colunas com numeros de 100 a 999 aleatorios
    }

    fclose($file);
?>
