<?php 
  // Expressao match

  // é uma nova estrutura condicional que apareceu no PHP 8
  // retorna um determinado valor de acordo com a analise efetuada

  // OBS: Se usarmos esse math em versões anteriores do php 8 ele n funciona

  $status_encomenda = "em processamento";

  // --------------------------------------------------------
  // versão switch
  switch($status_encomenda){
    case "em processamento":
    case "em analise":
      #codigo
      echo $status_encomenda;
      break;

    case "anulada":
    case "cancelada":
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

  // --------------------------------------------------------
  // versão match
  // passamos uma varaivwel para receber o match com o status da encomenda
  // dentro do bloco do match passamos o que deve ser feito caso
  // se o valor for igual ao passado. apos as => é oq sera feito caso seja esse valor
  $resultado = match($status_encomenda) {
    "em processamento" => "A encomenda ainda esta sendo tratada.",
    "anulada", "cancelada" => "A encomenda foi anulada ou cancelada.",
    "enviada" => "A encomenda foi envuiada.",
    default => "Estado da encomenda ainda desconhecido"
  };

  // dropamos o valor de resultado para mostrar o match
  echo $resultado;
?>