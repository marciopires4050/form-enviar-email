<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "form_cadastro";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if($conn->connect_errno){
  echo "Erro";
}else{
  echo "Conexão efetuada com sucesso";
}

?>