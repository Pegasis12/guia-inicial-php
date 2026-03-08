<?php 
  // Expressao condicional SWITCH

  // podemos agrupar varios valores em analise para
  // execucao do mesmo bloco de codigo

  $status_encomenda = "cancelada";

  // podemos add varias cases em um so bloco, caso algum deles seja verdadeiro
  // ele executa o codigo do bloco em questão
  switch($status_encomenda){
    case "em processamento":
    case "em analise":
      #codigo
      echo $status_encomenda;
      break;

    case "anulada":
    case "cancelada":
    case "invalida":
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