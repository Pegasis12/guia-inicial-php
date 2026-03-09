<?php
// break e continue

// break com varios niveis

// imagine o cenario em que estamos a executar dois ciclos, umd entro do outro
// o ciclo interior, econtra uma condição de para, ser interrompido.
// Quremos que o ciclo interior e o exterior sejam interrompidos

$paises = [
    "Portugal"   => ["Lisboa", "Porto", "Coimbra"],
    "Brasil"     => ["brasilia", "São Paulo", "Rio de janeiro"],
    "Angola"     => ["Luanda", "Cabinda", "Huambo"],
    "Mocambique" => ["Maputo", "Matola", "Nampulo"],
];

foreach ($paises as $pais=>$cidades) {
    echo "<h3><u>$pais</u></h3>";

    foreach($cidades as $cidade){
      // vamos parar os dois ciclos quando a cidade é cabinda
      // se fosse um break, ele quebraria esse ciclo, a partir de cambinda
      // break 2 significa q vou quebra o ciclo de dentro e o ciclo de fora
      // no caso ambos foreachs
      if($cidade == "Cabinda") break 2; 
      echo "<p>$cidade</p>";
    }

}
