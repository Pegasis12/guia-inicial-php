<?php 
  // verifica se  houve um reqquest do tipo POST
  if($_SERVER["REQUEST_METHOD"] != "POST"){
    die("Acesso Negado!");
  }

  // Regras de Validacao
  // - Todos os campos são de preenchimento obritaroio exceto o textarea.
  // - O primeiro campo de texto tem que ter entre 5 e 30 caracteres.
  // - o campo da senham tem que ter exatamente 12 caracteres
  // - O campo das 3 checkbox, pelo menos uma tem que estar selecionada.
  // - nos radiobuttons tem que existir uma opção selecionada.
  // - No caso do textarea, não é obrigatorio, mas se tiver texto
  // tem que ter, no minimo, 30 caracteres.

  $erros = [];

  // texto
  if(empty($_POST["text_texto"])){
    $erros[] = "O campo TEXTO é de preenchimento obrigatorio";
  } else {
    if(strlen($_POST["text_texto"]) < 5 || strlen($_POST["text_texto"]) > 30){
      $erros[] = "O campo TEXTO precisa ter no minimo 5 caracteres ou no maximo 30";
    }
  }

  // password
  if(empty($_POST["text_password"])){
    $erros[] = "O campo de SENHA é de preenchimento obrigatorio";
  } else {
    if(strlen($_POST["text_password"]) != 12){
      $erros[] = "O campo SENHA precisa ter exatamente 12 caracteres";
    }
  }

  // select
  if(empty($_POST["select_pais"])){
    $erros[] = "Tem que estar SELECIONADO um pais";
  } 

  // checkbox
  if(empty($_POST["check_1"]) && empty($_POST["check_2"]) && empty($_POST["check_3"])){
    $erros[] = "Ao menos um CHECKBOX precisa esta selecionado";
  }

  // radio
  if(empty($_POST["radio"])){
    $erros[] = "Ao menos um RADIO precisa esta selecionado";
  }

  // area texto
  if(!empty($_POST["text_area"]) && strlen($_POST["text_area"]) < 30){
    $erros[] = "Se for escrever um TEXTO, q tenha no minimo 30 caracteres";
  }

  if(!empty($erros)){
    echo "<h4>ERROS!</h4>";
    echo "<ul>";
    foreach ($erros as $erro){
      echo "<li>$erro</li>";
    }
    echo "</ul>";
  } else {
    echo "<pre>";
    print_r($_POST);
  }
?>