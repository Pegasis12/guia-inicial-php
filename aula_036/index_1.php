<?php 
  // Expressao condicional SWITCH

  // é uma estrutua semelhante ao id elseif else
  // o parametro é o valor a ser avaliado
  // cada case verifica se o valor é igual e executa o codigo a seguir aos :

  // break - ignora o resto do codigo

  // default é semelhante ao else - executado se nenhuma das comprações 
  // resultar em verdadeiro

  $status_encomenda = "em processamento";

  switch($status_encomenda){
    case "em processamento":
      #codigo
      echo $status_encomenda;
      break;

    case "anulada":
      #codigo
      echo $status_encomenda;
      break;
    
    case "enviada":
      #codigo
      echo $status_encomenda;
      break;
    
    default:
      #codigo
      echo $status_encomenda;
      break;
  }
?>