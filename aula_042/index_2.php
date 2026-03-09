<?php
// break e continue

// conitnue - diferente do break que interrompe
// continue permite passar de imediato para iteração seguinte

$nomes   = ["joao", "ana", "carlos", "francisco", "maria"];
$ignorar = "carlos";
foreach ($nomes as $nome) {
    // apos o continue, ele ignora oq foi passado na condição
    // e em seguida retorna sem o elemento ignorado
    if ($nome == $ignorar) {
        continue;
    }

    echo "$nome<br>";
}
