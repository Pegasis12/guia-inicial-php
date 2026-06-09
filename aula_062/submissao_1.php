<?php 
  // Este scrip vai tratar a submissão do formulario.

  // se não houve uma submissao de formulario, da acesso invalido
  if($_SERVER["REQUEST_METHOD"] != "POST"){
    die("Acesso Invalido");
  }

  // vai buscar  o username e a password
  // se esta definido na supe global post os dados de username e password ele faz isso
  $username = isset($_POST["text_username"]) ? $_POST["text_username"] : "";
  $password = isset($_POST["text_password"]) ? $_POST["text_password"] : "";

  // verifica se o login é valido
  $user = [
    "username" => "pablo",
    "password" => "123"
  ];

  if($username == $user["username"] && $password == $user["password"]){
    echo "<h1>LOGIN OK</h1>";
  } else {
    echo "<h1>LOGIN INVALIDO</h1>";
  }

  // link para voltar atras
  echo "<a href='index_1.php'>Voltar</a>"

  // Nota: Existem aspetos deste script que não são boas praticas obiavamente
?>