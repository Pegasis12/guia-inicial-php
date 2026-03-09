<?php
// break e continue

// os loops (ciclos) são usados para executar o mesmo codigo multiplas vezes.
// em determinada situacao, podemos querer que o siclo nao execute todas as suas alterações
// ou queremos que seja simplesmente interrompido

// e neste cenario que entram o break e o continue

// -----------------------------------------------------
// break - permite interromper a execução de um ciclo antes do previsto
// bno caso a condição dentro do for faz uma comparação se i é igual
// ao valor de paragem, se for ele quebra o fluxo cm break retornando a execução ate 5
$paragem = 5;
for ($i = 0; $i <= 10; $i++) {
    echo "$i<br>";
    if ($i == $paragem) {
        break;
    }
}
// poderiamos resumir tbm
// if($i == $paragem) break; uma instrucao no if na precisa abrir bloco
// que nem o js

echo "<hr>";

$nomes = ["joao", "ana", "carlos", "francisco", "maria"];
$nome_interrupcao = "carlos";
foreach ($nomes as $nome) {
    echo "$nome<br>";
    if ($nome == $nome_interrupcao) {
        break;
    }

}

// quebra o fluxo em carlos e retorna o resultado até ele
// tbm funciona em while e do while
